<?php
$string =  '<!DOCTYPE html>'.
'<html lang="pt-br">'.
''.
'<head>'.
'    <meta charset="UTF-8">'.
'    <meta name="viewport" content="width=device-width, initial-scale=1.0">'.
'    <meta name="description" content="Manuais de montagem da linha J.A e J.Confort - Grupo JSilvino">'.
'    <title>Manuais de Montagem - Grupo JSilvino</title>'.
'    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">'.
'    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">'.
'    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>'.
'    <style>'.
'        :root {'.
'            --primary-color: #0045AC;'.
'            --primary-dark: #00358A;'.
'            --primary-light: #3A6FC8;'.
'            --accent-color: #FFD700;'.
'            --accent-dark: #E6C200;'.
'            --text-light: #FFFFFF;'.
'            --text-dark: #2D3748;'.
'            --bg-dark: #1A202C;'.
'            --bg-light: #F7FAFC;'.
'            --transition-speed: 0.4s;'.
'            --border-radius: 16px;'.
'        }'.
''.
'        * {'.
'            margin: 0;'.
'            padding: 0;'.
'            box-sizing: border-box;'.
'        }'.
''.
'        body {'.
'            margin: 0;'.
'            font-family: \'Inter\', sans-serif;'.
'            min-height: 100vh;'.
'            background: linear-gradient(135deg, rgba(0, 53, 138, 0.9) 0%, rgba(0, 69, 172, 0.9) 100%), '.
'                        url(\'https://s2.glbimg.com/h77ybihrD5OxxEDNLK76qeCxEa0=/620x455/e.glbimg.com/og/ed/f/original/2019/06/12/sala-de-estar-tv-rack-sofa-tapete-mesa-lateral-parede-rosa-mesa-de-centro-marcenaria.jpg\') no-repeat center center fixed;'.
'            background-size: cover;'.
'            color: var(--text-light);'.
'            line-height: 1.6;'.
'            display: flex;'.
'            flex-direction: column;'.
'            padding: 20px;'.
'            position: relative;'.
'            overflow-x: hidden;'.
'        }'.
''.
'        .particles {'.
'            position: absolute;'.
'            top: 0;'.
'            left: 0;'.
'            width: 100%;'.
'            height: 100%;'.
'            z-index: -1;'.
'            opacity: 0.2;'.
'            pointer-events: none;'.
'        }'.
''.
'        .particle {'.
'            position: absolute;'.
'            background-color: var(--accent-color);'.
'            border-radius: 50%;'.
'            animation: float 20s infinite linear;'.
'            will-change: transform;'.
'            transform: translate3d(0, 0, 0);'.
'        }'.
''.
'        @keyframes float {'.
'            0% { transform: translateY(0) translateX(0) rotate(0deg); }'.
'            100% { transform: translateY(-100vh) translateX(20px) rotate(360deg); }'.
'        }'.
''.
'        .header {'.
'            width: 100%;'.
'            max-width: 1200px;'.
'            margin: 0 auto 30px;'.
'            display: flex;'.
'            justify-content: space-between;'.
'            align-items: center;'.
'            padding: 15px 0;'.
'            flex-wrap: wrap;'.
'        }'.
''.
'        .logo-container {'.
'            display: flex;'.
'            align-items: center;'.
'            gap: 15px;'.
'        }'.
''.
'        .logo-image {'.
'            width: 180px;'.
'            height: auto;'.
'            transition: transform var(--transition-speed) ease;'.
'            filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.3));'.
'        }'.
''.
'        .logo-image:hover {'.
'            transform: scale(1.05);'.
'        }'.
''.
'        .logo-text {'.
'            font-size: 1.2rem;'.
'            font-weight: 600;'.
'            color: var(--accent-color);'.
'            display: none;'.
'        }'.
''.
'        .main-container {'.
'            width: 100%;'.
'            max-width: 1200px;'.
'            margin: 0 auto;'.
'            display: grid;'.
'            grid-template-columns: 1fr;'.
'            gap: 30px;'.
'        }'.
''.
'        @media (min-width: 992px) {'.
'            .main-container {'.
'                grid-template-columns: 1fr 1fr;'.
'            }'.
'        }'.
''.
'        .card-container {'.
'            background: rgba(0, 69, 172, 0.2);'.
'            border-radius: var(--border-radius);'.
'            padding: 30px;'.
'            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);'.
'            border: 1px solid rgba(255, 255, 255, 0.1);'.
'            transition: all var(--transition-speed) ease;'.
'            position: relative;'.
'            overflow: hidden;'.
'            backdrop-filter: blur(5px);'.
'            -webkit-backdrop-filter: blur(5px);'.
'        }'.
''.
'        .card-container:hover {'.
'            transform: translateY(-5px);'.
'            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);'.
'            background: rgba(0, 69, 172, 0.25);'.
'        }'.
''.
'        .card-container::before {'.
'            content: \'\';'.
'            position: absolute;'.
'            top: 0;'.
'            left: 0;'.
'            width: 100%;'.
'            height: 5px;'.
'            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));'.
'        }'.
''.
'        .card-title {'.
'            display: flex;'.
'            align-items: center;'.
'            gap: 12px;'.
'            margin-bottom: 20px;'.
'            color: var(--accent-color);'.
'            font-size: 1.5rem;'.
'            font-weight: 600;'.
'        }'.
''.
'        .card-title i {'.
'            font-size: 1.8rem;'.
'        }'.
''.
'        .button-grid {'.
'            display: grid;'.
'            grid-template-columns: 1fr;'.
'            gap: 15px;'.
'        }'.
''.
'        .pdf-btn {'.
'            display: flex;'.
'            align-items: center;'.
'            justify-content: space-between;'.
'            background: rgba(255, 255, 255, 0.1);'.
'            color: var(--text-light);'.
'            font-size: 1rem;'.
'            font-weight: 500;'.
'            border-radius: 12px;'.
'            text-decoration: none;'.
'            padding: 16px 20px;'.
'            transition: all var(--transition-speed) ease;'.
'            border: 2px solid rgba(255, 255, 255, 0.2);'.
'            cursor: pointer;'.
'            position: relative;'.
'            overflow: hidden;'.
'            will-change: transform;'.
'        }'.
''.
'        .pdf-btn:hover {'.
'            background: var(--primary-color);'.
'            transform: translateY(-3px);'.
'            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);'.
'            border-color: var(--accent-color);'.
'        }'.
''.
'        .pdf-btn::before {'.
'            content: \'\';'.
'            position: absolute;'.
'            top: 0;'.
'            left: -100%;'.
'            width: 100%;'.
'            height: 100%;'.
'            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);'.
'            transition: 0.5s;'.
'        }'.
''.
'        .pdf-btn:hover::before {'.
'            left: 100%;'.
'        }'.
''.
'        .pdf-btn i {'.
'            font-size: 1.2rem;'.
'            margin-left: 10px;'.
'            color: var(--accent-color);'.
'        }'.
''.
'        .btn-ja {'.
'            border-left: 4px solid #FF6B6B;'.
'        }'.
''.
'        .btn-jconfort {'.
'            border-left: 4px solid #4ECDC4;'.
'        }'.
''.
'        .modal {'.
'            display: none;'.
'            position: fixed;'.
'            top: 0;'.
'            left: 0;'.
'            width: 100%;'.
'            height: 100%;'.
'            background-color: rgba(0, 0, 0, 0.9);'.
'            z-index: 1000;'.
'            overflow: auto;'.
'        }'.
''.
'        .modal-content {'.
'            background-color: var(--bg-dark);'.
'            margin: 2% auto;'.
'            padding: 20px;'.
'            border-radius: var(--border-radius);'.
'            width: 90%;'.
'            max-width: 900px;'.
'            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.5);'.
'            position: relative;'.
'            display: flex;'.
'            flex-direction: column;'.
'            min-height: 90vh;'.
'        }'.
''.
'        .modal-header {'.
'            display: flex;'.
'            justify-content: space-between;'.
'            align-items: center;'.
'            margin-bottom: 20px;'.
'            padding-bottom: 10px;'.
'            border-bottom: 1px solid rgba(255, 255, 255, 0.1);'.
'        }'.
''.
'        .modal-title {'.
'            color: var(--accent-color);'.
'            font-size: 1.5rem;'.
'        }'.
''.
'        .close-btn {'.
'            color: var(--text-light);'.
'            font-size: 2rem;'.
'            cursor: pointer;'.
'            transition: color var(--transition-speed) ease;'.
'        }'.
''.
'        .close-btn:hover {'.
'            color: var(--accent-color);'.
'        }'.
''.
'        #pdf-viewer {'.
'            width: 100%;'.
'            height: 70vh;'.
'            border: 1px solid rgba(255, 255, 255, 0.1);'.
'            border-radius: 8px;'.
'            overflow: auto;'.
'            background-color: #525659;'.
'            flex-grow: 1;'.
'        }'.
''.
'        .pdf-controls {'.
'            display: flex;'.
'            justify-content: space-between;'.
'            align-items: center;'.
'            margin-top: 15px;'.
'            gap: 10px;'.
'            flex-wrap: wrap;'.
'            padding: 10px 0;'.
'        }'.
''.
'        .page-controls {'.
'            display: flex;'.
'            align-items: center;'.
'            gap: 10px;'.
'            flex-grow: 1;'.
'        }'.
''.
'        .page-info {'.
'            font-size: 0.9rem;'.
'            color: var(--text-light);'.
'            opacity: 0.8;'.
'            margin: 0 10px;'.
'        }'.
''.
'        .download-pdf {'.
'            background-color: var(--primary-color);'.
'            color: var(--text-light);'.
'            border: none;'.
'            padding: 10px 20px;'.
'            border-radius: 6px;'.
'            cursor: pointer;'.
'            transition: all var(--transition-speed) ease;'.
'            display: flex;'.
'            align-items: center;'.
'            gap: 8px;'.
'            white-space: nowrap;'.
'        }'.
''.
'        .download-pdf:hover {'.
'            background-color: var(--primary-dark);'.
'            transform: translateY(-2px);'.
'        }'.
''.
'        .info-section {'.
'            background: rgba(0, 69, 172, 0.3);'.
'            border-radius: var(--border-radius);'.
'            padding: 20px;'.
'            margin-top: 25px;'.
'            border-left: 4px solid var(--accent-color);'.
'        }'.
''.
'        .info-title {'.
'            display: flex;'.
'            align-items: center;'.
'            gap: 10px;'.
'            margin-bottom: 10px;'.
'            font-weight: 600;'.
'            color: var(--accent-color);'.
'        }'.
''.
'        .footer {'.
'            width: 100%;'.
'            max-width: 1200px;'.
'            margin: 40px auto 0;'.
'            text-align: center;'.
'            padding: 20px;'.
'            font-size: 0.9rem;'.
'            color: rgba(255, 255, 255, 0.7);'.
'            border-top: 1px solid rgba(255, 255, 255, 0.1);'.
'        }'.
''.
'        .footer a {'.
'            color: var(--accent-color);'.
'            text-decoration: none;'.
'            font-weight: 500;'.
'            transition: color var(--transition-speed) ease;'.
'        }'.
''.
'        .footer a:hover {'.
'            color: var(--text-light);'.
'            text-decoration: underline;'.
'        }'.
''.
'        .social-links {'.
'            display: flex;'.
'            justify-content: center;'.
'            gap: 20px;'.
'            margin-top: 15px;'.
'        }'.
''.
'        .social-links a {'.
'            color: var(--text-light);'.
'            font-size: 1.2rem;'.
'            transition: all var(--transition-speed) ease;'.
'        }'.
''.
'        .social-links a:hover {'.
'            color: var(--accent-color);'.
'            transform: translateY(-3px);'.
'        }'.
''.
'        @media (max-width: 768px) {'.
'            body {'.
'                padding: 15px 10px;'.
'            }'.
'            '.
'            .header {'.
'                flex-direction: column;'.
'                text-align: center;'.
'                gap: 15px;'.
'                padding-bottom: 15px;'.
'                margin-bottom: 15px;'.
'            }'.
'            '.
'            .logo-image {'.
'                width: 140px;'.
'                margin: 0 auto;'.
'            }'.
'            '.
'            .line-selector {'.
'                display: block;'.
'                width: calc(100% - 20px);'.
'                margin: 0 auto 15px;'.
'                padding: 0;'.
'            }'.
'            '.
'            .line-selector select {'.
'                width: 100%;'.
'                padding: 14px;'.
'                font-size: 1rem;'.
'            }'.
'            '.
'            .main-container {'.
'                gap: 0;'.
'                padding: 0;'.
'                width: 100%;'.
'            }'.
'            '.
'            .card-container {'.
'                width: 100%;'.
'                margin: 0;'.
'                border-radius: 0;'.
'                padding: 20px 15px !important;'.
'                border-left: none;'.
'                border-right: none;'.
'                background: rgba(0, 69, 172, 0.3);'.
'                backdrop-filter: none;'.
'                -webkit-backdrop-filter: none;'.
'                display: none;'.
'            }'.
'            '.
'            .card-container.active {'.
'                display: block;'.
'            }'.
'            '.
'            .card-container:hover {'.
'                transform: none;'.
'                box-shadow: none;'.
'            }'.
'            '.
'            .card-title {'.
'                font-size: 1.3rem;'.
'                justify-content: center;'.
'            }'.
'            '.
'            .pdf-btn {'.
'                width: 100%;'.
'                padding: 16px 12px !important;'.
'                font-size: 0.95rem;'.
'                border-radius: 8px;'.
'            }'.
'            '.
'            .card-container .info-section {'.
'                display: none;'.
'            }'.
'            '.
'            .visit-website-btn {'.
'                width: calc(100% - 30px);'.
'                margin: 20px auto;'.
'                padding: 16px !important;'.
'            }'.
'            '.
'            .modal-content {'.
'                width: 100%;'.
'                height: 100%;'.
'                margin: 0;'.
'                border-radius: 0;'.
'                padding: 15px;'.
'                max-width: none;'.
'            }'.
'            '.
'            #pdf-viewer {'.
'                height: calc(100vh - 180px);'.
'                min-height: 60vh;'.
'            }'.
'            '.
'            .pdf-controls {'.
'                position: sticky;'.
'                bottom: 0;'.
'                left: 0;'.
'                right: 0;'.
'                background: rgba(0, 0, 0, 0.8);'.
'                padding: 10px;'.
'                margin-top: auto;'.
'                z-index: 10;'.
'            }'.
'            '.
'            .page-controls {'.
'                justify-content: center;'.
'                width: 100%;'.
'                order: 2;'.
'                margin-top: 10px;'.
'            }'.
'            '.
'            .download-pdf {'.
'                width: 100%;'.
'                justify-content: center;'.
'                order: 1;'.
'            }'.
'            '.
'            .footer {'.
'                padding: 20px 10px;'.
'                margin-top: 20px;'.
'            }'.
''.
'            .mobile-only {'.
'                display: block !important;'.
'            }'.
'            '.
'            .desktop-only {'.
'                display: none !important;'.
'            }'.
'            '.
'            .info-section.mobile-only {'.
'                background: rgba(0, 69, 172, 0.3);'.
'                border-radius: var(--border-radius);'.
'                padding: 15px;'.
'                margin: 15px auto;'.
'                width: calc(100% - 30px);'.
'                border-left: 4px solid var(--accent-color);'.
'                transition: all 0.3s ease;'.
'            }'.
'        }'.
''.
'        @media (min-width: 769px) {'.
'            .mobile-only {'.
'                display: none !important;'.
'            }'.
'            '.
'            .desktop-only {'.
'                display: block !important;'.
'            }'.
'        }'.
''.
'        @media (max-width: 480px) {'.
'            .card-title {'.
'                font-size: 1.2rem;'.
'            }'.
'            '.
'            .pdf-btn {'.
'                font-size: 0.9rem;'.
'                padding: 14px 10px !important;'.
'            }'.
'            '.
'            .footer {'.
'                font-size: 0.8rem;'.
'            }'.
'            '.
'            .modal-title {'.
'                font-size: 1.2rem;'.
'                max-width: 80%;'.
'                white-space: nowrap;'.
'                overflow: hidden;'.
'                text-overflow: ellipsis;'.
'            }'.
'            '.
'            .close-btn {'.
'                font-size: 1.8rem;'.
'            }'.
'        }'.
''.
'        @keyframes fadeIn {'.
'            from { opacity: 0; transform: translateY(10px); }'.
'            to { opacity: 1; transform: translateY(0); }'.
'        }'.
''.
'        .fade-in {'.
'            animation: fadeIn 0.6s ease forwards;'.
'            opacity: 0;'.
'        }'.
''.
'        .delay-1 { animation-delay: 0.1s; }'.
'        .delay-2 { animation-delay: 0.2s; }'.
'        .delay-3 { animation-delay: 0.3s; }'.
'        .delay-4 { animation-delay: 0.4s; }'.
''.
'        .line-selector {'.
'            display: none;'.
'            margin-bottom: 20px;'.
'            width: 100%;'.
'        }'.
''.
'        .line-selector select {'.
'            width: 100%;'.
'            padding: 12px 15px;'.
'            border-radius: var(--border-radius);'.
'            border: 2px solid var(--accent-color);'.
'            background-color: rgba(0, 69, 172, 0.5);'.
'            color: var(--text-light);'.
'            font-size: 1rem;'.
'            font-weight: 500;'.
'            appearance: none;'.
'            -webkit-appearance: none;'.
'            -moz-appearance: none;'.
'            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 24 24\' fill=\'%23FFD700\'%3e%3cpath d=\'M7 10l5 5 5-5z\'/%3e%3c/svg%3e");'.
'            background-repeat: no-repeat;'.
'            background-position: right 15px center;'.
'            background-size: 20px;'.
'            cursor: pointer;'.
'            transition: all var(--transition-speed) ease;'.
'        }'.
''.
'        .line-selector select:focus {'.
'            outline: none;'.
'            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.3);'.
'        }'.
''.
'        .line-selector option {'.
'            background-color: var(--primary-dark);'.
'            color: var(--text-light);'.
'        }'.
''.
'        @media (max-width: 768px) {'.
'            .line-selector {'.
'                display: block;'.
'            }'.
'        }'.
''.
'        .visit-website-btn {'.
'            display: inline-block;'.
'            background: linear-gradient(135deg, var(--accent-color), var(--accent-dark));'.
'            color: var(--primary-dark);'.
'            font-size: 1.1rem;'.
'            font-weight: 600;'.
'            text-align: center;'.
'            text-decoration: none;'.
'            padding: 15px 30px;'.
'            border-radius: var(--border-radius);'.
'            margin: 20px auto;'.
'            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);'.
'            transition: all var(--transition-speed) ease;'.
'            border: none;'.
'            cursor: pointer;'.
'            position: relative;'.
'            overflow: hidden;'.
'            z-index: 1;'.
'        }'.
''.
'        .visit-website-btn:hover {'.
'            transform: translateY(-3px);'.
'            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);'.
'            color: var(--primary-dark);'.
'        }'.
''.
'        .visit-website-btn::before {'.
'            content: \'\';'.
'            position: absolute;'.
'            top: 0;'.
'            left: -100%;'.
'            width: 100%;'.
'            height: 100%;'.
'            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);'.
'            transition: 0.5s;'.
'            z-index: -1;'.
'        }'.
''.
'        .visit-website-btn:hover::before {'.
'            left: 100%;'.
'        }'.
''.
'        .visit-website-btn i {'.
'            margin-left: 8px;'.
'        }'.
''.
'        .visit-website-container {'.
'            width: 100%;'.
'            max-width: 1200px;'.
'            margin: 0 auto;'.
'            text-align: center;'.
'        }'.
''.
'        .cookie-banner {'.
'            position: fixed;'.
'            bottom: 0;'.
'            left: 0;'.
'            right: 0;'.
'            background: rgba(0, 53, 138, 0.95);'.
'            color: white;'.
'            padding: 20px;'.
'            display: flex;'.
'            flex-direction: column;'.
'            align-items: center;'.
'            justify-content: center;'.
'            text-align: center;'.
'            z-index: 9999;'.
'            box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.2);'.
'            transform: translateY(100%);'.
'            transition: transform 0.4s ease-out;'.
'        }'.
''.
'        .cookie-banner.show {'.
'            transform: translateY(0);'.
'        }'.
''.
'        .cookie-content {'.
'            max-width: 800px;'.
'            margin: 0 auto;'.
'            padding: 0 20px;'.
'        }'.
''.
'        .cookie-buttons {'.
'            display: flex;'.
'            gap: 15px;'.
'            margin-top: 15px;'.
'            flex-wrap: wrap;'.
'            justify-content: center;'.
'        }'.
''.
'        .cookie-btn {'.
'            padding: 10px 25px;'.
'            border-radius: 8px;'.
'            font-weight: 600;'.
'            cursor: pointer;'.
'            transition: all 0.3s ease;'.
'            border: none;'.
'            font-size: 1rem;'.
'        }'.
''.
'        .cookie-btn-accept {'.
'            background-color: var(--accent-color);'.
'            color: var(--primary-dark);'.
'        }'.
''.
'        .cookie-btn-accept:hover {'.
'            background-color: var(--accent-dark);'.
'            transform: translateY(-2px);'.
'        }'.
''.
'        .cookie-btn-close {'.
'            background-color: var(--primary-light);'.
'            color: white;'.
'        }'.
''.
'        .cookie-btn-close:hover {'.
'            background-color: var(--primary-dark);'.
'            transform: translateY(-2px);'.
'        }'.
''.
'        @media (max-width: 600px) {'.
'            .cookie-banner {'.
'                padding: 15px;'.
'            }'.
'            '.
'            .cookie-buttons {'.
'                flex-direction: column;'.
'                width: 100%;'.
'            }'.
'            '.
'            .cookie-btn {'.
'                width: 100%;'.
'            }'.
'        }'.
'    </style>'.
'</head>'.
''.
'<body>'.
'    <div class="particles" id="particles"></div>'.
'    '.
'    <div class="cookie-banner" id="cookieBanner">'.
'        <div class="cookie-content">'.
'            <p>Utilizamos cookies para oferecer a melhor experiência e personalizar conteúdo. Ao seguir navegando, você concorda com a nossa Política de Privacidade e Termos de Uso.</p>'.
'            <div class="cookie-buttons">'.
'                <button class="cookie-btn cookie-btn-accept" id="acceptCookies">Continuar</button>'.
'                <button class="cookie-btn cookie-btn-close" id="closeCookies">Fechar</button>'.
'            </div>'.
'        </div>'.
'    </div>'.
'    '.
'    <header class="header fade-in">'.
'        <div class="logo-container">'.
'            <a href="https://www.estofadosja.com.br" target="_blank">'.
'                <img src="logo.png" alt="Logo J.A - Grupo JSilvino" class="logo-image">'.
'            </a>'.
'            <span class="logo-text">Grupo JSilvino</span>'.
'        </div>'.
'        <div class="info-section fade-in delay-1">'.
'            <div class="info-title">'.
'                <i class="fas fa-info-circle"></i>'.
'                <h3>Central de Manuais</h3>'.
'            </div>'.
'            <p>Visualize e baixe os nossos manuais de montagem</p>'.
'        </div>'.
'    </header>'.
'    '.
'    <div class="line-selector fade-in delay-1">'.
'        <select id="lineFilter">'.
'            <option value="">Selecione uma linha</option>'.
'            <option value="ja">Linha J.A</option>'.
'            <option value="jconfort">Linha J.Confort</option>'.
'        </select>'.
'    </div>'.
'    '.
'    <main class="main-container">'.
'        <div class="card-container fade-in delay-1" id="ja-card">'.
'            <div class="card-title">'.
'                <i class="fas fa-couch"></i>'.
'                <h2>Linha J.A</h2>'.
'            </div>'.
'            '.
'            <div class="button-grid">'.
'                <div class="pdf-btn btn-ja delay-2" onclick="openPdfModal(\'MANUAL DE MONTAGEM LINHA J.A FIXO\', \'manuais/Modelo Fixo J.A.pdf\')">'.
'                    Manual de Montagem - Modelo Fixo'.
'                    <i class="fas fa-eye"></i>'.
'                </div>'.
'                '.
'                <div class="pdf-btn btn-ja delay-3" onclick="openPdfModal(\'MANUAL DE MONTAGEM LINHA J.A RETRATIL RECLINAVEL\', \'manuais/Retrátil e Reclinável J.A.pdf\')">'.
'                    Manual de Montagem - Retrátil e Reclinável'.
'                    <i class="fas fa-eye"></i>'.
'                </div>'.
'                '.
'                 <div class="pdf-btn btn-jconfort delay-3" onclick="openPdfModal(\'Termo de Garantia\', \'manuais/Termo de Garantia.pdf\')">'.
'                    Termo de Garantia '.
'                    <i class="fas fa-eye"></i>'.
'                </div>'.
'            </div>'.
'            '.
'            <div class="info-section fade-in delay-4 desktop-only">'.
'                <div class="info-title">'.
'                    <i class="fas fa-tools"></i>'.
'                    <h3>Dicas de Montagem</h3>'.
'                </div>'.
'                <p>Verifique todas as peças antes de começar e siga atentamente as instruções passo a passo.</p>'.
'            </div>'.
'        </div>'.
'        '.
'        <div class="card-container fade-in delay-2" id="jconfort-card">'.
'            <div class="card-title">'.
'                <i class="fas fa-chair"></i>'.
'                <h2>Linha J.Confort</h2>'.
'            </div>'.
'            '.
'            <div class="button-grid">'.
'                <div class="pdf-btn btn-jconfort delay-3" onclick="openPdfModal(\'MANUAL DE MONTAGEM LINHA J.CONFORT FIXO\', \'manuais/Modelo Fixo JC.pdf\')">'.
'                    Manual de Montagem - Modelo Fixo'.
'                    <i class="fas fa-eye"></i>'.
'                </div>'.
'                '.
'                <div class="pdf-btn btn-jconfort delay-4" onclick="openPdfModal(\'MANUAL DE MONTAGEM LINHA J.CONFORT RETRATIL RECLINAVEL\', \'manuais/Retrátil e Reclinável JC.pdf\')">'.
'                    Manual de Montagem - Retrátil e Reclinável'.
'                    <i class="fas fa-eye"></i>'.
'                </div>'.
'                '.
'                <div class="pdf-btn btn-jconfort delay-3" onclick="openPdfModal(\'Termo de Garantia\', \'manuais/Termo de Garantia.pdf\')">'.
'                    Termo de Garantia '.
'                    <i class="fas fa-eye"></i>'.
'                </div>'.
'            </div>'.
'            '.
'            <div class="info-section fade-in delay-4 desktop-only">'.
'                <div class="info-title">'.
'                    <i class="fas fa-headset"></i>'.
'                    <h3>Suporte Técnico</h3>'.
'                </div>'.
'                <p>Em caso de dúvidas, entre em contato com nosso suporte: sac@grupojsilvino.com</p>'.
'            </div>'.
'        </div>'.
'    </main>'.
''.
'    <div class="visit-website-container fade-in delay-3">'.
'        <a href="https://www.estofadosja.com.br" target="_blank" class="visit-website-btn">'.
'            Visite nosso site <i class="fas fa-external-link-alt"></i>'.
'        </a>'.
'    </div>'.
'    '.
'    <div id="pdfModal" class="modal">'.
'        <div class="modal-content">'.
'            <div class="modal-header">'.
'                <h3 class="modal-title" id="pdfModalTitle">Manual de Montagem</h3>'.
'                <span class="close-btn" onclick="closeModal()">&times;</span>'.
'            </div>'.
'            '.
'            <div id="pdf-viewer"></div>'.
'            '.
'            <div class="pdf-controls">'.
'                <button id="download-pdf" class="download-pdf">'.
'                    <i class="fas fa-download"></i> Baixar PDF'.
'                </button>'.
'                '.
'                <div class="page-controls">'.
'                    <button id="prev-page" class="download-pdf">'.
'                        <i class="fas fa-arrow-left"></i> Anterior'.
'                    </button>'.
'                    <span class="page-info">'.
'                        Página <span id="page-num">1</span> de <span id="page-count">0</span>'.
'                    </span>'.
'                    <button id="next-page" class="download-pdf">'.
'                        Próxima <i class="fas fa-arrow-right"></i>'.
'                    </button>'.
'                </div>'.
'            </div>'.
'        </div>'.
'    </div>'.
'    '.
'    <footer class="footer fade-in delay-4">'.
'        <p>Todos os Direitos Reservados 2025 © <a href="https://grupojsilvino.com" target="_blank">Grupo JSilvino</a></p>'.
'        '.
'        <div class="social-links">'.
'            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>'.
'        </div>'.
'        '.
'        '.
'    </footer>'.
''.
'    <script>'.
'        if(typeof pdfjsLib === \'undefined\') {'.
'            console.error(\'PDF.js não carregou corretamente\');'.
'        } else {'.
'            pdfjsLib.GlobalWorkerOptions.workerSrc = \'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.worker.min.js\';'.
'        }'.
'        '.
'        let pdfDoc = null,'.
'            pageNum = 1,'.
'            pageRendering = false,'.
'            pageNumPending = null,'.
'            scale = 1.5,'.
'            currentPdfUrl = \'\';'.
'        '.
'        const modal = document.getElementById(\'pdfModal\');'.
'        const pdfViewer = document.getElementById(\'pdf-viewer\');'.
'        const pageNumElement = document.getElementById(\'page-num\');'.
'        const pageCountElement = document.getElementById(\'page-count\');'.
'        const prevPageBtn = document.getElementById(\'prev-page\');'.
'        const nextPageBtn = document.getElementById(\'next-page\');'.
'        const downloadPdfBtn = document.getElementById(\'download-pdf\');'.
'        const pdfModalTitle = document.getElementById(\'pdfModalTitle\');'.
'        '.
'        function openPdfModal(title, pdfUrl) {'.
'            try {'.
'                currentPdfUrl = pdfUrl;'.
'                pdfModalTitle.textContent = title;'.
'                modal.style.display = \'block\';'.
'                document.body.style.overflow = \'hidden\';'.
'                '.
'                scale = window.innerWidth <= 768 ? 1.0 : 1.5;'.
'                '.
'                pdfViewer.innerHTML = \'<div style="display:flex;justify-content:center;align-items:center;height:100%;color:white;"><i class="fas fa-spinner fa-spin fa-3x"></i></div>\';'.
'                '.
'                if (pdfDoc) {'.
'                    pdfDoc.destroy().catch(e => console.warn(\'Erro ao limpar PDF anterior:\', e));'.
'                }'.
'                '.
'                const loadTimeout = setTimeout(() => {'.
'                    pdfViewer.innerHTML = \'<div style="color:white;text-align:center;padding:20px;">Carregando... (Pode demorar para arquivos grandes)</div>\';'.
'                }, 2000);'.
'                '.
'                pdfjsLib.getDocument({'.
'                    url: pdfUrl,'.
'                    disableAutoFetch: true,'.
'                    disableStream: true'.
'                }).promise.then(function(pdfDoc_) {'.
'                    clearTimeout(loadTimeout);'.
'                    pdfDoc = pdfDoc_;'.
'                    pageCountElement.textContent = pdfDoc.numPages;'.
'                    pageNum = 1;'.
'                    '.
'                    downloadPdfBtn.onclick = function() {'.
'                        const link = document.createElement(\'a\');'.
'                        link.href = pdfUrl;'.
'                        link.download = pdfUrl.split(\'/\').pop();'.
'                        document.body.appendChild(link);'.
'                        link.click();'.
'                        setTimeout(() => {'.
'                            document.body.removeChild(link);'.
'                        }, 100);'.
'                    };'.
'                    '.
'                    renderPage(1);'.
'                }).catch(function(error) {'.
'                    console.error(\'Erro ao carregar PDF:\', error);'.
'                    clearTimeout(loadTimeout);'.
'                    showPdfError();'.
'                });'.
'            } catch (e) {'.
'                console.error(\'Erro ao abrir modal:\', e);'.
'                showPdfError();'.
'            }'.
'        }'.
''.
'        function showPdfError() {'.
'            pdfViewer.innerHTML = `'.
'                <div style="color:white;text-align:center;padding:20px;">'.
'                    <i class="fas fa-exclamation-triangle fa-2x" style="color:#FFD700;margin-bottom:15px;"></i>'.
'                    <p>Erro ao carregar o PDF. Por favor, tente baixar o arquivo.</p>'.
'                    <button onclick="document.getElementById(\'download-pdf\').click()" '.
'                            style="background:var(--primary-color);color:white;border:none;padding:10px 20px;border-radius:5px;margin-top:15px;cursor:pointer;">'.
'                        <i class="fas fa-download"></i> Baixar Manual'.
'                    </button>'.
'                </div>'.
'            `;'.
'        }'.
'        '.
'        function closeModal() {'.
'            modal.style.display = \'none\';'.
'            document.body.style.overflow = \'auto\';'.
'            '.
'            if (pdfDoc) {'.
'                pdfDoc.destroy().catch(e => console.warn(\'Erro ao limpar PDF:\', e));'.
'                pdfDoc = null;'.
'            }'.
'            pdfViewer.innerHTML = \'\';'.
'            scale = 1.5;'.
'        }'.
'        '.
'        function renderPage(num) {'.
'            if (!pdfDoc) return;'.
'            '.
'            pageRendering = true;'.
'            pdfViewer.innerHTML = \'<div style="display:flex;justify-content:center;align-items:center;height:100%;color:white;"><i class="fas fa-spinner fa-spin fa-2x"></i></div>\';'.
'            '.
'            pdfDoc.getPage(num).then(function(page) {'.
'                const viewport = page.getViewport({ scale: scale });'.
'                const canvas = document.createElement(\'canvas\');'.
'                const context = canvas.getContext(\'2d\');'.
'                canvas.height = viewport.height;'.
'                canvas.width = viewport.width;'.
'                canvas.style.maxWidth = \'100%\';'.
'                canvas.style.height = \'auto\';'.
'                '.
'                pdfViewer.innerHTML = \'\';'.
'                pdfViewer.appendChild(canvas);'.
'                '.
'                const renderContext = {'.
'                    canvasContext: context,'.
'                    viewport: viewport'.
'                };'.
'                '.
'                const renderTask = page.render(renderContext);'.
'                '.
'                renderTask.promise.then(function() {'.
'                    pageRendering = false;'.
'                    if (pageNumPending !== null) {'.
'                        renderPage(pageNumPending);'.
'                        pageNumPending = null;'.
'                    }'.
'                }).catch(err => {'.
'                    console.error(\'Erro ao renderizar página:\', err);'.
'                    pdfViewer.innerHTML = \'<div style="color:white;text-align:center;padding:20px;">Erro ao renderizar esta página</div>\';'.
'                });'.
'            }).catch(err => {'.
'                console.error(\'Erro ao obter página:\', err);'.
'                pdfViewer.innerHTML = \'<div style="color:white;text-align:center;padding:20px;">Erro ao carregar esta página</div>\';'.
'                pageRendering = false;'.
'            });'.
'            '.
'            pageNumElement.textContent = num;'.
'            prevPageBtn.disabled = num <= 1;'.
'            nextPageBtn.disabled = num >= pdfDoc.numPages;'.
'        }'.
'        '.
'        function queueRenderPage(num) {'.
'            if (pageRendering) {'.
'                pageNumPending = num;'.
'            } else {'.
'                renderPage(num);'.
'            }'.
'        }'.
'        '.
'        let navTimeout;'.
'        prevPageBtn.addEventListener(\'click\', function() {'.
'            clearTimeout(navTimeout);'.
'            navTimeout = setTimeout(() => {'.
'                if (pageNum <= 1) return;'.
'                pageNum--;'.
'                queueRenderPage(pageNum);'.
'            }, 150);'.
'        });'.
'        '.
'        nextPageBtn.addEventListener(\'click\', function() {'.
'            clearTimeout(navTimeout);'.
'            navTimeout = setTimeout(() => {'.
'                if (pageNum >= pdfDoc.numPages) return;'.
'                pageNum++;'.
'                queueRenderPage(pageNum);'.
'            }, 150);'.
'        });'.
'        '.
'        window.addEventListener(\'click\', function(event) {'.
'            if (event.target === modal) {'.
'                closeModal();'.
'            }'.
'        });'.
'        '.
'        document.addEventListener(\'keydown\', function(event) {'.
'            if (event.key === \'Escape\' && modal.style.display === \'block\') {'.
'                closeModal();'.
'            }'.
'        });'.
'        '.
'        let zoomTimeout;'.
'        pdfViewer.addEventListener(\'wheel\', function(e) {'.
'            if (e.ctrlKey) {'.
'                e.preventDefault();'.
'                clearTimeout(zoomTimeout);'.
'                zoomTimeout = setTimeout(() => {'.
'                    if (e.deltaY < 0) {'.
'                        scale = Math.min(scale + 0.1, 3);'.
'                    } else {'.
'                        scale = Math.max(scale - 0.1, 0.5);'.
'                    }'.
'                    renderPage(pageNum);'.
'                }, 100);'.
'            }'.
'        }, { passive: false });'.
'        '.
'        function createParticles() {'.
'            const particlesContainer = document.getElementById(\'particles\');'.
'            const particleCount = window.innerWidth < 768 ? 15 : 25;'.
'            '.
'            particlesContainer.innerHTML = \'\';'.
'            '.
'            for (let i = 0; i < particleCount; i++) {'.
'                const particle = document.createElement(\'div\');'.
'                particle.classList.add(\'particle\');'.
'                '.
'                const size = Math.random() * 3 + 1;'.
'                particle.style.width = `${size}px`;'.
'                particle.style.height = `${size}px`;'.
'                particle.style.left = `${Math.random() * 100}%`;'.
'                particle.style.top = `${Math.random() * 100}%`;'.
'                particle.style.opacity = Math.random() * 0.2 + 0.1;'.
'                '.
'                const duration = Math.random() * 20 + 10;'.
'                const delay = Math.random() * 10;'.
'                particle.style.animation = `float ${duration}s ${delay}s infinite linear`;'.
'                '.
'                particlesContainer.appendChild(particle);'.
'            }'.
'        }'.
'        '.
'        function setupCookieBanner() {'.
'            const cookieBanner = document.getElementById(\'cookieBanner\');'.
'            const acceptCookiesBtn = document.getElementById(\'acceptCookies\');'.
'            const closeCookiesBtn = document.getElementById(\'closeCookies\');'.
'            '.
'            const cookiesAccepted = localStorage.getItem(\'cookiesAccepted\');'.
'            '.
'            if (!cookiesAccepted) {'.
'                setTimeout(() => {'.
'                    cookieBanner.classList.add(\'show\');'.
'                }, 1000);'.
'            }'.
'            '.
'            acceptCookiesBtn.addEventListener(\'click\', () => {'.
'                localStorage.setItem(\'cookiesAccepted\', \'true\');'.
'                cookieBanner.classList.remove(\'show\');'.
'            });'.
'            '.
'            closeCookiesBtn.addEventListener(\'click\', () => {'.
'                cookieBanner.classList.remove(\'show\');'.
'            });'.
'        }'.
'        '.
'        document.addEventListener(\'DOMContentLoaded\', function() {'.
'            createParticles();'.
'            '.
'            setupCookieBanner();'.
'            '.
'            const lineFilter = document.getElementById(\'lineFilter\');'.
'            '.
'            let resizeTimeout;'.
'            window.addEventListener(\'resize\', function() {'.
'                clearTimeout(resizeTimeout);'.
'                resizeTimeout = setTimeout(function() {'.
'                    createParticles();'.
'                }, 200);'.
'            });'.
'            '.
'            setTimeout(() => {'.
'                document.querySelectorAll(\'.fade-in\').forEach(el => {'.
'                    el.style.opacity = \'1\';'.
'                });'.
'            }, 100);'.
'            '.
'            const cards = document.querySelectorAll(\'.card-container\');'.
'            cards.forEach(card => {'.
'                card.addEventListener(\'mouseenter\', () => {'.
'                    requestAnimationFrame(() => {'.
'                        card.style.transform = \'translateY(-8px)\';'.
'                        card.style.boxShadow = \'0 15px 30px rgba(0, 0, 0, 0.3)\';'.
'                    });'.
'                });'.
'                '.
'                card.addEventListener(\'mouseleave\', () => {'.
'                    requestAnimationFrame(() => {'.
'                        card.style.transform = \'translateY(-5px)\';'.
'                        card.style.boxShadow = \'0 10px 25px rgba(0, 0, 0, 0.2)\';'.
'                    });'.
'                });'.
'            });'.
''.
'            if (lineFilter) {'.
'                lineFilter.addEventListener(\'change\', function() {'.
'                    const selectedLine = this.value;'.
'                    '.
'                    document.querySelectorAll(\'.card-container\').forEach(card => {'.
'                        card.classList.remove(\'active\');'.
'                    });'.
'                    '.
'                    if (selectedLine) {'.
'                        const activeCard = document.getElementById(`${selectedLine}-card`);'.
'                        activeCard.classList.add(\'active\');'.
'                        '.
'                        if (window.innerWidth <= 768) {'.
'                            activeCard.scrollIntoView({'.
'                                behavior: \'smooth\','.
'                                block: \'start\''.
'                            });'.
'                        }'.
'                    }'.
'                });'.
'            }'.
''.
'            if (window.innerWidth <= 768) {'.
'                document.querySelectorAll(\'.card-container\').forEach(card => {'.
'                    card.classList.remove(\'active\');'.
'                });'.
'            } else {'.
'                document.querySelectorAll(\'.card-container\').forEach(card => {'.
'                    card.classList.add(\'active\');'.
'                });'.
'            }'.
'        });'.
'    </script>'.
'</body>'.
'</html>';

 echo $string; 
?>