<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo SITE_DESCRIPTION; ?>">
    <title><?php echo SITE_NAME; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="particles" id="particles"></div>
    
    <div class="cookie-banner" id="cookieBanner">
        <div class="cookie-content">
            <p>Utilizamos cookies para oferecer a melhor experiência e personalizar conteúdo. Ao seguir navegando, você concorda com a nossa Política de Privacidade e Termos de Uso.</p>
            <div class="cookie-buttons">
                <button class="cookie-btn cookie-btn-accept" id="acceptCookies">Continuar</button>
                <button class="cookie-btn cookie-btn-close" id="closeCookies">Fechar</button>
            </div>
        </div>
    </div>
    
    <header class="header fade-in">
        <div class="logo-container">
            <a href="https://www.estofadosja.com.br" target="_blank">
                <img src="<?php echo SITE_LOGO; ?>" alt="Logo J.A - Grupo JSilvino" class="logo-image">
            </a>
            <span class="logo-text">Grupo JSilvino</span>
        </div>
        <div class="info-section fade-in delay-1">
            <div class="info-title">
                <i class="fas fa-info-circle"></i>
                <h3>Central de Manuais</h3>
            </div>
            <p>Visualize e baixe os nossos manuais de montagem</p>
        </div>
    </header>
    
    <div class="line-selector fade-in delay-1">
        <select id="lineFilter">
            <option value="">Selecione uma linha</option>
            <option value="ja">Linha J.A</option>
            <option value="jconfort">Linha J.Confort</option>
        </select>
    </div>