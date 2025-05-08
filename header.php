<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PDFSavvy | Convert PDF to DOCX, HTML, TXT & More</title>
<meta name="description"
    content="Convert PDF to DOCX, HTML, TXT, CSV, XLSX and vice versa with our free online PDF converter. Fast, secure, and easy to use with no installation required.">
<meta name="keywords"
    content="PDF Converter, PDF to Word, PDF to DOCX, PDF to HTML, PDF to TXT, PDF to CSV, PDF to XLSX, DOCX to PDF, HTML to PDF, TXT to PDF, CSV to PDF, XLSX to PDF, free PDF converter, online PDF converter, secure PDF converter, PDF conversion tool">
<meta name="author" content="PDFSavvy">
<meta property="og:title" content="PDFSavvy - Ultimate PDF Conversion Tool" />
<meta property="og:description"
    content="Convert PDF to DOCX, HTML, TXT, CSV, XLSX and vice versa with our free online PDF converter. Fast, secure, and easy to use." />
<meta property="og:url" content="https://pdfsavvy.com/" />
<meta property="og:image" content="https://pdfsavvy.com/images/pdfsavvy-banner.png" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="PDFSavvy - Ultimate PDF Conversion Tool" />
<meta name="twitter:description"
    content="Convert PDF to DOCX, HTML, TXT, CSV, XLSX and vice versa with our free online PDF converter. Fast, secure, and easy to use." />
<meta name="twitter:image" content="https://pdfsavvy.com/images/pdfsavvy-banner.png" />
<meta name="twitter:creator" content="@PDFSavvy" />
<link rel="canonical" href="https://pdfsavvy.com">
<link rel="icon" href="favicon.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/docx/7.8.2/docx.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.4.8/mammoth.browser.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf-lib/1.17.1/pdf-lib.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.4.0/purify.min.js"
    integrity="sha512-6tHjjK7X0PJURsU+V63dIWmFdpu0Q+7tW3EsJV0+K+0+ylMqShfGP45BxJ8hj6U3GQphBkeffZrZWz50b0gW6g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/mammoth/mammoth.browser.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.worker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/docx@7.8.2/build/index.min.js"></script>
<script src="https://unpkg.com/@docxjs/docx@7.8.2/dist/docx.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papa-parse.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.28/jspdf.plugin.autotable.min.js"></script>
<script>
window.jsPDF = window.jspdf.jsPDF;
pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.worker.min.js';
</script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

    :root {
        --primary: #4f46e5;
        --primary-dark: #4338ca;
        --primary-light: #818cf8;
        --secondary: #10b981;
        --secondary-dark: #059669;
        --neon-glow: 0 0 5px rgba(129, 140, 248, 0.5), 0 0 20px rgba(129, 140, 248, 0.3);
        --neon-blue-glow: 0 0 5px rgba(79, 70, 229, 0.5), 0 0 20px rgba(79, 70, 229, 0.3);
        --neon-green-glow: 0 0 5px rgba(16, 185, 129, 0.5), 0 0 20px rgba(16, 185, 129, 0.3);
        --neon-red-glow: 0 0 5px rgba(239, 68, 68, 0.5), 0 0 20px rgba(239, 68, 68, 0.3);
        --neon-yellow-glow: 0 0 5px rgba(245, 158, 11, 0.5), 0 0 20px rgba(245, 158, 11, 0.3);
        --neon-purple-glow: 0 0 5px rgba(139, 92, 246, 0.5), 0 0 20px rgba(139, 92, 246, 0.3);
    }

    body {
        font-family: 'Inter', sans-serif;
        background-color: #f8fafc;
        scroll-behavior: smooth;
    }

    .jspdf-autotable {
        border-collapse: collapse;
    }

    .jspdf-autotable th {
        background-color: #f8fafc;
        font-weight: 600;
    }

    .jspdf-autotable td,
    .jspdf-autotable th {
        border: 1px solid #e2e8f0;
        padding: 4px 8px;
    }

    .gradient-bg {
        background: linear-gradient(135deg, #4f46e5 0%, #3b82f6 100%);
    }

    .hero-gradient {
        background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
        position: relative;
        overflow: hidden;
    }

    .hero-gradient::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle at center, rgba(129, 140, 248, 0.15) 0%, transparent 70%);
        top: 0;
        left: 0;
    }

    .hero-pattern {
        position: absolute;
        width: 100%;
        height: 100%;
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23818cf8' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.5;
    }

    .neon-border {
        position: relative;
        border: 2px solid var(--primary-light);
        transition: all 0.3s ease;
    }

    .format-card {
        transition: all 0.3s ease;
    }

    .format-card:hover {
        transform: translateY(-5px);
    }

    .format-card.pdf:hover {
        box-shadow: var(--neon-red-glow);
        border-color: #ef4444;
    }

    .format-card.docx:hover {
        box-shadow: var(--neon-blue-glow);
        border-color: #4f46e5;
    }

    .format-card.html:hover {
        box-shadow: var(--neon-yellow-glow);
        border-color: #f59e0b;
    }

    .format-card.txt:hover {
        box-shadow: var(--neon-green-glow);
        border-color: #10b981;
    }

    .format-card.csv:hover {
        box-shadow: var(--neon-purple-glow);
        border-color: #8b5cf6;
    }

    .format-card.xlsx:hover {
        box-shadow: var(--neon-glow);
        border-color: #818cf8;
    }

    .drop-zone {
        border: 2px dashed #818cf8;
        transition: all 0.3s ease;
        background-color: rgba(129, 140, 248, 0.05);
    }

    .drop-zone:hover {
        border-color: #4f46e5;
        box-shadow: var(--neon-blue-glow);
        background-color: rgba(79, 70, 229, 0.05);
    }

    .drop-zone.active {
        border-color: #10b981;
        box-shadow: var(--neon-green-glow);
        background-color: rgba(16, 185, 129, 0.1);
    }

    .progress-bar {
        transition: width 0.3s ease;
    }

    .converter-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(129, 140, 248, 0.2);
    }

    .feature-icon {
        transition: all 0.3s ease;
    }

    .feature-card:hover .feature-icon {
        transform: scale(1.1);
    }

    .btn-primary {
        background-color: var(--primary);
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: var(--primary-dark);
        box-shadow: var(--neon-blue-glow);
    }

    .btn-secondary {
        background-color: var(--secondary);
        transition: all 0.3s ease;
    }

    .btn-secondary:hover {
        background-color: var(--secondary-dark);
        box-shadow: var(--neon-green-glow);
    }

    .tab-button {
        transition: all 0.3s ease;
    }

    .tab-button.active {
        border-color: var(--primary);
        color: var(--primary);
    }

    .tab-button:hover:not(.active) {
        border-color: var(--primary-light);
        color: var(--primary-light);
    }

    .features-grid {
        background-image: radial-gradient(circle at 50% 50%, rgba(79, 70, 229, 0.05) 0%, transparent 70%);
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.7;
        }
    }

    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    /* Utility classes for the neon effects */
    .neon-glow {
        transition: all 0.3s ease;
    }

    .neon-glow:hover {
        filter: drop-shadow(0 0 5px rgba(129, 140, 248, 0.5)) drop-shadow(0 0 20px rgba(129, 140, 248, 0.3));
    }

    .neon-blue:hover {
        filter: drop-shadow(0 0 5px rgba(79, 70, 229, 0.5)) drop-shadow(0 0 20px rgba(79, 70, 229, 0.3));
    }

    .neon-green:hover {
        filter: drop-shadow(0 0 5px rgba(16, 185, 129, 0.5)) drop-shadow(0 0 20px rgba(16, 185, 129, 0.3));
    }

    .neon-red:hover {
        filter: drop-shadow(0 0 5px rgba(239, 68, 68, 0.5)) drop-shadow(0 0 20px rgba(239, 68, 68, 0.3));
    }

    .neon-yellow:hover {
        filter: drop-shadow(0 0 5px rgba(245, 158, 11, 0.5)) drop-shadow(0 0 20px rgba(245, 158, 11, 0.3));
    }

    .neon-purple:hover {
        filter: drop-shadow(0 0 5px rgba(139, 92, 246, 0.5)) drop-shadow(0 0 20px rgba(139, 92, 246, 0.3));
    }

    /* Add to header.php styles */
    .temp-conversion-container {
        visibility: hidden;
        position: absolute;
        left: -9999px;
        width: 21cm !important;
        min-height: 29.7cm !important;
        padding: 2.54cm !important;
        box-sizing: border-box;
        font-family: "Times New Roman", Times, serif;
        font-size: 12pt;
        line-height: 1.5;
    }

    .temp-conversion-container h1 {
        font-size: 24pt;
        margin: 24pt 0;
    }

    .temp-conversion-container h2 {
        font-size: 18pt;
        margin: 18pt 0;
    }

    .temp-conversion-container p {
        margin: 12pt 0;
        text-align: justify;
    }

    .temp-conversion-container table {
        width: 100%;
        border-collapse: collapse;
        margin: 12pt 0;
    }

    .temp-conversion-container img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 12pt auto;
    }
</style>
<!-- <script>
    // Security scripts from the original file
    document.addEventListener('contextmenu', e => e.preventDefault());
    document.addEventListener('keydown', e => {
        const isMac = navigator.platform.toUpperCase().indexOf('MAC') >= 0;
        const key = e.key.toUpperCase();
        const blockedKeys = new Set(['F12', 'F7', 'F8', 'U', 'I', 'J', 'C']);
        const modifier = isMac ? e.metaKey : e.ctrlKey;

        if (
            (modifier && e.shiftKey && key === 'I') ||
            (modifier && key === 'U') ||
            (modifier && key === 'S') ||
            (modifier && key === 'P') ||
            key === 'F12' ||
            (e.altKey && key === 'F4') ||
            blockedKeys.has(key)
        ) {
            e.preventDefault();
            e.stopPropagation();
            return false;
        }
    });

    document.addEventListener('devtools-opened', () => {
        window.location.reload();
    });

    if (window.self !== window.top) {
        window.top.location = window.self.location;
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.body.style.userSelect = 'text';
        document.body.style.webkitUserSelect = 'text';

        document.querySelectorAll('img, a, div, section, header, footer').forEach(el => {
            el.setAttribute('draggable', 'false');
            el.style.userDrag = 'none';
            el.style.webkitUserDrag = 'none';
        });

        const selectableElements = document.querySelectorAll('p, span, h1, h2, h3, h4, h5, h6, li, td, pre, code');
        selectableElements.forEach(el => {
            el.style.userSelect = 'text';
            el.style.webkitUserSelect = 'text';
        });
    });

    window.onload = function () {
        const images = document.getElementsByTagName('img');
        for (let img of images) {
            img.setAttribute('draggable', 'false');
            img.ondragstart = function () { return false; };
        }
    };
</script> -->

<header class="bg-gray-900 text-white sticky top-0 z-50 shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center space-x-2">
                <svg class="h-8 w-8 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <a href="/" class="text-2xl font-bold text-white flex items-center">
                    PDF<span class="text-indigo-500">Savvy</span>
                </a>
            </div>
            <nav class="hidden md:flex items-center space-x-6">
                <a href="#features" class="text-gray-300 hover:text-white transition">Features</a>
                <a href="#formats" class="text-gray-300 hover:text-white transition">Formats</a>
                <a href="#how-it-works" class="text-gray-300 hover:text-white transition">How It Works</a>
                <a href="#faq" class="text-gray-300 hover:text-white transition">FAQ</a>
                <a href="#contact" class="text-gray-300 hover:text-white transition">Contact</a>
            </nav>
            <div class="flex items-center space-x-3">
                <a href="#convert"
                    class="hidden md:block bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md font-medium transition neon-blue">Start
                    Converting</a>
                <button class="md:hidden text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const scrollLinks = document.querySelectorAll('a[href^="#"]');

        scrollLinks.forEach(link => {
        link.addEventListener('click', event => {
            event.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
        });
    });
</script>