if(typeof pdfjsLib === 'undefined') {
    console.error('PDF.js não carregou corretamente');
} else {
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.worker.min.js';
}

let pdfDoc = null,
    pageNum = 1,
    pageRendering = false,
    pageNumPending = null,
    scale = 1.5,
    currentPdfUrl = '';

const modal = document.getElementById('pdfModal');
const pdfViewer = document.getElementById('pdf-viewer');
const pageNumElement = document.getElementById('page-num');
const pageCountElement = document.getElementById('page-count');
const prevPageBtn = document.getElementById('prev-page');
const nextPageBtn = document.getElementById('next-page');
const downloadPdfBtn = document.getElementById('download-pdf');
const pdfModalTitle = document.getElementById('pdfModalTitle');

function openPdfModal(title, pdfUrl) {
    try {
        currentPdfUrl = pdfUrl;
        pdfModalTitle.textContent = title;
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
        
        scale = window.innerWidth <= 768 ? 1.0 : 1.5;
        
        pdfViewer.innerHTML = '<div style="display:flex;justify-content:center;align-items:center;height:100%;color:white;"><i class="fas fa-spinner fa-spin fa-3x"></i></div>';
        
        if (pdfDoc) {
            pdfDoc.destroy().catch(e => console.warn('Erro ao limpar PDF anterior:', e));
        }
        
        const loadTimeout = setTimeout(() => {
            pdfViewer.innerHTML = '<div style="color:white;text-align:center;padding:20px;">Carregando... (Pode demorar para arquivos grandes)</div>';
        }, 2000);
        
        pdfjsLib.getDocument({
            url: pdfUrl,
            disableAutoFetch: true,
            disableStream: true
        }).promise.then(function(pdfDoc_) {
            clearTimeout(loadTimeout);
            pdfDoc = pdfDoc_;
            pageCountElement.textContent = pdfDoc.numPages;
            pageNum = 1;
            
            downloadPdfBtn.onclick = function() {
                const link = document.createElement('a');
                link.href = pdfUrl;
                link.download = pdfUrl.split('/').pop();
                document.body.appendChild(link);
                link.click();
                setTimeout(() => {
                    document.body.removeChild(link);
                }, 100);
            };
            
            renderPage(1);
        }).catch(function(error) {
            console.error('Erro ao carregar PDF:', error);
            clearTimeout(loadTimeout);
            showPdfError();
        });
    } catch (e) {
        console.error('Erro ao abrir modal:', e);
        showPdfError();
    }
}

function showPdfError() {
    pdfViewer.innerHTML = `
        <div style="color:white;text-align:center;padding:20px;">
            <i class="fas fa-exclamation-triangle fa-2x" style="color:#FFD700;margin-bottom:15px;"></i>
            <p>Erro ao carregar o PDF. Por favor, tente baixar o arquivo.</p>
            <button onclick="document.getElementById('download-pdf').click()" 
                    style="background:var(--primary-color);color:white;border:none;padding:10px 20px;border-radius:5px;margin-top:15px;cursor:pointer;">
                <i class="fas fa-download"></i> Baixar Manual
            </button>
        </div>
    `;
}

function closeModal() {
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
    
    if (pdfDoc) {
        pdfDoc.destroy().catch(e => console.warn('Erro ao limpar PDF:', e));
        pdfDoc = null;
    }
    pdfViewer.innerHTML = '';
    scale = 1.5;
}

function renderPage(num) {
    if (!pdfDoc) return;
    
    pageRendering = true;
    pdfViewer.innerHTML = '<div style="display:flex;justify-content:center;align-items:center;height:100%;color:white;"><i class="fas fa-spinner fa-spin fa-2x"></i></div>';
    
    pdfDoc.getPage(num).then(function(page) {
        const viewport = page.getViewport({ scale: scale });
        const canvas = document.createElement('canvas');
        const context = canvas.getContext('2d');
        canvas.height = viewport.height;
        canvas.width = viewport.width;
        canvas.style.maxWidth = '100%';
        canvas.style.height = 'auto';
        
        pdfViewer.innerHTML = '';
        pdfViewer.appendChild(canvas);
        
        const renderContext = {
            canvasContext: context,
            viewport: viewport
        };
        
        const renderTask = page.render(renderContext);
        
        renderTask.promise.then(function() {
            pageRendering = false;
            if (pageNumPending !== null) {
                renderPage(pageNumPending);
                pageNumPending = null;
            }
        }).catch(err => {
            console.error('Erro ao renderizar página:', err);
            pdfViewer.innerHTML = '<div style="color:white;text-align:center;padding:20px;">Erro ao renderizar esta página</div>';
        });
    }).catch(err => {
        console.error('Erro ao obter página:', err);
        pdfViewer.innerHTML = '<div style="color:white;text-align:center;padding:20px;">Erro ao carregar esta página</div>';
        pageRendering = false;
    });
    
    pageNumElement.textContent = num;
    prevPageBtn.disabled = num <= 1;
    nextPageBtn.disabled = num >= pdfDoc.numPages;
}

function queueRenderPage(num) {
    if (pageRendering) {
        pageNumPending = num;
    } else {
        renderPage(num);
    }
}

let navTimeout;
prevPageBtn.addEventListener('click', function() {
    clearTimeout(navTimeout);
    navTimeout = setTimeout(() => {
        if (pageNum <= 1) return;
        pageNum--;
        queueRenderPage(pageNum);
    }, 150);
});

nextPageBtn.addEventListener('click', function() {
    clearTimeout(navTimeout);
    navTimeout = setTimeout(() => {
        if (pageNum >= pdfDoc.numPages) return;
        pageNum++;
        queueRenderPage(pageNum);
    }, 150);
});

window.addEventListener('click', function(event) {
    if (event.target === modal) {
        closeModal();
    }
});

document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape' && modal.style.display === 'block') {
        closeModal();
    }
});

let zoomTimeout;
pdfViewer.addEventListener('wheel', function(e) {
    if (e.ctrlKey) {
        e.preventDefault();
        clearTimeout(zoomTimeout);
        zoomTimeout = setTimeout(() => {
            if (e.deltaY < 0) {
                scale = Math.min(scale + 0.1, 3);
            } else {
                scale = Math.max(scale - 0.1, 0.5);
            }
            renderPage(pageNum);
        }, 100);
    }
}, { passive: false });

function createParticles() {
    const particlesContainer = document.getElementById('particles');
    const particleCount = window.innerWidth < 768 ? 15 : 25;
    
    particlesContainer.innerHTML = '';
    
    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');
        
        const size = Math.random() * 3 + 1;
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.left = `${Math.random() * 100}%`;
        particle.style.top = `${Math.random() * 100}%`;
        particle.style.opacity = Math.random() * 0.2 + 0.1;
        
        const duration = Math.random() * 20 + 10;
        const delay = Math.random() * 10;
        particle.style.animation = `float ${duration}s ${delay}s infinite linear`;
        
        particlesContainer.appendChild(particle);
    }
}

function setupCookieBanner() {
    const cookieBanner = document.getElementById('cookieBanner');
    const acceptCookiesBtn = document.getElementById('acceptCookies');
    const closeCookiesBtn = document.getElementById('closeCookies');
    
    const cookiesAccepted = localStorage.getItem('cookiesAccepted');
    
    if (!cookiesAccepted) {
        setTimeout(() => {
            cookieBanner.classList.add('show');
        }, 1000);
    }
    
    acceptCookiesBtn.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        cookieBanner.classList.remove('show');
    });
    
    closeCookiesBtn.addEventListener('click', () => {
        cookieBanner.classList.remove('show');
    });
}

document.addEventListener('DOMContentLoaded', function() {
    createParticles();
    
    setupCookieBanner();
    
    const lineFilter = document.getElementById('lineFilter');
    
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function() {
            createParticles();
        }, 200);
    });
    
    setTimeout(() => {
        document.querySelectorAll('.fade-in').forEach(el => {
            el.style.opacity = '1';
        });
    }, 100);
    
    const cards = document.querySelectorAll('.card-container');
    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            requestAnimationFrame(() => {
                card.style.transform = 'translateY(-8px)';
                card.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.3)';
            });
        });
        
        card.addEventListener('mouseleave', () => {
            requestAnimationFrame(() => {
                card.style.transform = 'translateY(-5px)';
                card.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.2)';
            });
        });
    });

    if (lineFilter) {
        lineFilter.addEventListener('change', function() {
            const selectedLine = this.value;
            
            document.querySelectorAll('.card-container').forEach(card => {
                card.classList.remove('active');
            });
            
            if (selectedLine) {
                const activeCard = document.getElementById(`${selectedLine}-card`);
                activeCard.classList.add('active');
                
                if (window.innerWidth <= 768) {
                    activeCard.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    }

    if (window.innerWidth <= 768) {
        document.querySelectorAll('.card-container').forEach(card => {
            card.classList.remove('active');
        });
    } else {
        document.querySelectorAll('.card-container').forEach(card => {
            card.classList.add('active');
        });
    }
});