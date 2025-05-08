<?php
include("header.php");
?>

<body class="bg-gray-50 text-gray-800">
  <div class="min-h-screen flex flex-col">
    <!-- Hero Section -->
    <section class="hero-gradient text-white py-16 md:py-24 relative">
      <div class="hero-pattern absolute inset-0"></div>
      <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
          <div class="md:w-1/2 mb-8 md:mb-0">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
              Convert PDF Files with <span class="text-indigo-400">Precision</span>
            </h1>
            <p class="text-xl text-gray-300 mb-8 max-w-lg">
              The ultimate PDF conversion tool that handles all your document needs securely in your browser. No
              installation, no uploads.
            </p>
            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
              <a href="#convert"
                class="btn-primary text-center font-medium text-white px-6 py-3 rounded-lg shadow-lg hover:shadow-xl transition">
                Start Converting Now
              </a>
              <a href="#formats"
                class="bg-transparent border-2 border-indigo-500 text-center font-medium text-white px-6 py-3 rounded-lg hover:bg-indigo-500/10 transition">
                Explore Formats
              </a>
            </div>
          </div>
          <div class="md:w-1/2 flex justify-center">
            <div class="relative">
              <!-- Main PDF illustration -->
              <svg class="w-80 h-80 neon-glow" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="15" y="10" width="90" height="100" rx="4" fill="#1E293B" stroke="#818CF8" stroke-width="2" />
                <rect x="25" y="20" width="70" height="10" rx="2" fill="#4F46E5" opacity="0.7" />
                <rect x="25" y="35" width="70" height="5" rx="1" fill="#818CF8" opacity="0.5" />
                <rect x="25" y="45" width="70" height="5" rx="1" fill="#818CF8" opacity="0.5" />
                <rect x="25" y="55" width="70" height="5" rx="1" fill="#818CF8" opacity="0.5" />
                <rect x="25" y="65" width="40" height="5" rx="1" fill="#818CF8" opacity="0.5" />
                <rect x="25" y="80" width="30" height="20" rx="2" fill="#4F46E5" opacity="0.3" />
                <rect x="65" y="80" width="30" height="20" rx="2" fill="#4F46E5" opacity="0.3" />
                <path d="M35 20H55V30H35V20Z" fill="#4F46E5" />
                <text x="38" y="27" fill="white" font-size="8" font-family="Arial, sans-serif"
                  font-weight="bold">PDF</text>
                <g class="animate-pulse">
                  <path d="M90 65L85 60L80 65" stroke="#10B981" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M85 60V75" stroke="#10B981" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </g>
                <circle cx="85" cy="40" r="10" fill="#6366F1" opacity="0.2" stroke="#6366F1" stroke-width="1" />
                <path d="M80 40L85 45L90 40" stroke="#6366F1" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>

              <!-- Floating format icons -->
              <div class="absolute -right-6 top-5 bg-blue-600 rounded-full p-2 shadow-lg animate-bounce neon-blue">
                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
              </div>

              <div
                class="absolute -left-4 top-20 bg-green-500 rounded-full p-2 shadow-lg animate-bounce delay-100 neon-green">
                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
              </div>

              <div
                class="absolute right-5 bottom-5 bg-purple-600 rounded-full p-2 shadow-lg animate-bounce delay-200 neon-purple">
                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
              </div>

              <div
                class="absolute left-10 bottom-10 bg-red-500 rounded-full p-2 shadow-lg animate-bounce delay-300 neon-red">
                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Format Cards Section -->
    <section id="formats" class="py-16 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">Supported Formats</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">Convert between various document formats with high fidelity and
            precise formatting preservation.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">

          <!-- DOCX Format Card -->
          <a href="docx-conversion.php"
            class="format-card docx bg-white rounded-xl shadow-md hover:shadow-xl border-2 border-transparent p-6 text-center">
            <div class="mb-4 text-indigo-600 flex justify-center">
              <svg class="w-16 h-16 neon-blue" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 18H17V16H7V18Z" fill="currentColor" />
                <path d="M17 14H7V12H17V14Z" fill="currentColor" />
                <path d="M7 10H11V8H7V10Z" fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M3 5C3 3.34315 4.34315 2 6 2H14C17.866 2 21 5.13401 21 9V19C21 20.6569 19.6569 22 18 22H6C4.34315 22 3 20.6569 3 19V5ZM6 4H13V9H19C19 6.23858 16.7614 4 14 4V9C19 9 19 9 19 9V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4Z"
                  fill="currentColor" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">DOCX</h3>
            <p class="text-gray-600 mb-4">Microsoft Word documents with preserved formatting, images, and styles.</p>
            <span class="text-indigo-600 font-medium inline-flex items-center">
              Learn More
              <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </a>

          <!-- HTML Format Card -->
          <a href="html-conversion.php"
            class="format-card html bg-white rounded-xl shadow-md hover:shadow-xl border-2 border-transparent p-6 text-center">
            <div class="mb-4 text-yellow-500 flex justify-center">
              <svg class="w-16 h-16 neon-yellow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 5.5V18.5H20V5.5H4ZM5.5 7H18.5V11.5H5.5V7ZM5.5 13H12V17H5.5V13ZM13.5 17V13H18.5V17H13.5Z"
                  fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M2 5.5C2 4.39543 2.89543 3.5 4 3.5H20C21.1046 3.5 22 4.39543 22 5.5V18.5C22 19.6046 21.1046 20.5 20 20.5H4C2.89543 20.5 2 19.6046 2 18.5V5.5ZM4 5.5H20V18.5H4V5.5Z"
                  fill="currentColor" />
                <path d="M9 9.5L7 8.5V10.5L9 9.5Z" fill="currentColor" />
                <path d="M15 9.5L17 8.5V10.5L15 9.5Z" fill="currentColor" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">HTML</h3>
            <p class="text-gray-600 mb-4">Web-ready HTML files with CSS styling for web publishing or editing.</p>
            <span class="text-yellow-500 font-medium inline-flex items-center">
              Learn More
              <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </a>

          <!-- TXT Format Card -->
          <a href="txt-conversion.php"
            class="format-card txt bg-white rounded-xl shadow-md hover:shadow-xl border-2 border-transparent p-6 text-center">
            <div class="mb-4 text-green-500 flex justify-center">
              <svg class="w-16 h-16 neon-green" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 18H17V16H7V18Z" fill="currentColor" />
                <path d="M17 14H7V12H17V14Z" fill="currentColor" />
                <path d="M7 10H17V8H7V10Z" fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M3 5C3 3.34315 4.34315 2 6 2H18C19.6569 2 21 3.34315 21 5V19C21 20.6569 19.6569 22 18 22H6C4.34315 22 3 20.6569 3 19V5ZM6 4H18C18.5523 4 19 4.44772 19 5V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4Z"
                  fill="currentColor" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">TXT</h3>
            <p class="text-gray-600 mb-4">Simple text files for universal compatibility and easy editing.</p>
            <span class="text-green-500 font-medium inline-flex items-center">
              Learn More
              <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </a>

          <!-- CSV Format Card -->
          <a href="csv-conversion.php"
            class="format-card csv bg-white rounded-xl shadow-md hover:shadow-xl border-2 border-transparent p-6 text-center">
            <div class="mb-4 text-purple-600 flex justify-center">
              <svg class="w-16 h-16 neon-purple" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 5H20V7H4V5Z" fill="currentColor" />
                <path d="M4 9H20V11H4V9Z" fill="currentColor" />
                <path d="M4 13H20V15H4V13Z" fill="currentColor" />
                <path d="M4 17H20V19H4V17Z" fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M2 3C2 1.89543 2.89543 1 4 1H20C21.1046 1 22 1.89543 22 3V21C22 22.1046 21.1046 23 20 23H4C2.89543 23 2 22.1046 2 21V3ZM4 3H20V21H4V3Z"
                  fill="currentColor" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">CSV</h3>
            <p class="text-gray-600 mb-4">Comma-separated values for data analysis and spreadsheet applications.</p>
            <span class="text-purple-600 font-medium inline-flex items-center">
              Learn More
              <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </a>

          <!-- XLSX Format Card -->
          <a href="xlsx-conversion.php"
            class="format-card xlsx bg-white rounded-xl shadow-md hover:shadow-xl border-2 border-transparent p-6 text-center">
            <div class="mb-4 text-indigo-400 flex justify-center">
              <svg class="w-16 h-16 neon-glow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 4H8V8H4V4Z" fill="currentColor" />
                <path d="M4 10H8V14H4V10Z" fill="currentColor" />
                <path d="M8 16H4V20H8V16Z" fill="currentColor" />
                <path d="M10 4H14V8H10V4Z" fill="currentColor" />
                <path d="M14 10H10V14H14V10Z" fill="currentColor" />
                <path d="M10 16H14V20H10V16Z" fill="currentColor" />
                <path d="M20 4H16V8H20V4Z" fill="currentColor" />
                <path d="M16 10H20V14H16V10Z" fill="currentColor" />
                <path d="M20 16H16V20H20V16Z" fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M2 2C2 0.89543 2.89543 0 4 0H20C21.1046 0 22 0.89543 22 2V22C22 23.1046 21.1046 24 20 24H4C2.89543 24 2 23.1046 2 22V2ZM4 2H20V22H4V2Z"
                  fill="currentColor" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">XLSX</h3>
            <p class="text-gray-600 mb-4">Microsoft Excel spreadsheets with formulas, formatting, and multiple sheets.
            </p>
            <span class="text-indigo-400 font-medium inline-flex items-center">
              Learn More
              <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </a>

          <!-- PDF Format Card -->
          <a href="pdf-conversion.php"
            class="format-card pdf bg-white rounded-xl shadow-md hover:shadow-xl border-2 border-transparent p-6 text-center">
            <div class="mb-4 text-red-500 flex justify-center">
              <svg class="w-16 h-16 neon-red" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 18H17V16H7V18Z" fill="currentColor" />
                <path d="M17 14H7V12H17V14Z" fill="currentColor" />
                <path d="M7 10H11V8H7V10Z" fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6 2C4.34315 2 3 3.34315 3 5V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V9C21 5.13401 17.866 2 14 2H6ZM6 4H13V9H19V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4ZM15 4.10002C16.6113 4.4271 17.9413 5.52906 18.584 7H15V4.10002Z"
                  fill="currentColor" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">PDF</h3>
            <p class="text-gray-600 mb-4">Convert PDFs to editable formats or create PDFs from various document types.
            </p>
            <span class="text-red-500 font-medium inline-flex items-center">
              Learn More
              <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </a>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 features-grid">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Choose PDFSavvy</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">We offer superior conversion quality with advanced features to meet
            all your document needs.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
          <!-- Feature 1 -->
          <div
            class="feature-card bg-white rounded-xl shadow-md hover:shadow-xl p-6 border-t-4 border-indigo-500 transition">
            <div class="mb-4 text-indigo-500">
              <svg class="feature-icon h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-3">100% Secure Processing</h3>
            <p class="text-gray-600">All file conversions happen locally in your browser. Files never leave your device,
              ensuring complete privacy.</p>
          </div>

          <!-- Feature 2 -->
          <div
            class="feature-card bg-white rounded-xl shadow-md hover:shadow-xl p-6 border-t-4 border-indigo-500 transition">
            <div class="mb-4 text-indigo-500">
              <svg class="feature-icon h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-3">Lightning Fast</h3>
            <p class="text-gray-600">Advanced algorithms ensure rapid conversions with minimal wait time, even for large
              and complex documents.</p>
          </div>

          <!-- Feature 3 -->
          <div
            class="feature-card bg-white rounded-xl shadow-md hover:shadow-xl p-6 border-t-4 border-indigo-500 transition">
            <div class="mb-4 text-indigo-500">
              <svg class="feature-icon h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-3">Customizable Options</h3>
            <p class="text-gray-600">Fine-tune your conversions with format-specific options to achieve perfect results
              tailored to your needs.</p>
          </div>

          <!-- Feature 4 -->
          <div
            class="feature-card bg-white rounded-xl shadow-md hover:shadow-xl p-6 border-t-4 border-green-500 transition">
            <div class="mb-4 text-green-500">
              <svg class="feature-icon h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-3">High-Fidelity Conversion</h3>
            <p class="text-gray-600">Preserve formatting, fonts, images, and layouts with exceptional accuracy across
              all supported formats.</p>
          </div>

          <!-- Feature 5 -->
          <div
            class="feature-card bg-white rounded-xl shadow-md hover:shadow-xl p-6 border-t-4 border-green-500 transition">
            <div class="mb-4 text-green-500">
              <svg class="feature-icon h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-3">No Installation Required</h3>
            <p class="text-gray-600">Access our powerful conversion tools directly from your browser—no downloads,
              plugins, or software installation needed.</p>
          </div>

          <!-- Feature 6 -->
          <div
            class="feature-card bg-white rounded-xl shadow-md hover:shadow-xl p-6 border-t-4 border-green-500 transition">
            <div class="mb-4 text-green-500">
              <svg class="feature-icon h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-3">Multiple Format Support</h3>
            <p class="text-gray-600">Convert between PDF, DOCX, HTML, TXT, CSV, and XLSX formats with consistent quality
              and reliability.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-16 bg-gradient-to-b from-white to-gray-50">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">How It Works</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">Convert your documents in three simple steps with our intuitive
            process.</p>
        </div>

        <div class="max-w-5xl mx-auto">
          <div class="flex flex-col md:flex-row items-center justify-between">
            <!-- Step 1 -->
            <div class="md:w-1/3 text-center px-6 mb-8 md:mb-0">
              <div class="bg-indigo-100 rounded-full h-20 w-20 flex items-center justify-center mx-auto mb-4">
                <span class="text-indigo-600 font-bold text-2xl">1</span>
              </div>
              <h3 class="text-xl font-semibold mb-3">Upload Your File</h3>
              <p class="text-gray-600">Drag and drop or browse to select the file you want to convert. We support PDF,
                DOCX, HTML, TXT, CSV, and XLSX.</p>
            </div>

            <!-- Arrow -->
            <div class="hidden md:block">
              <svg class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </div>

            <!-- Step 2 -->
            <div class="md:w-1/3 text-center px-6 mb-8 md:mb-0">
              <div class="bg-indigo-100 rounded-full h-20 w-20 flex items-center justify-center mx-auto mb-4">
                <span class="text-indigo-600 font-bold text-2xl">2</span>
              </div>
              <h3 class="text-xl font-semibold mb-3">Select Output Format</h3>
              <p class="text-gray-600">Choose your desired output format and configure any additional conversion options
                to customize the result.</p>
            </div>

            <!-- Arrow -->
            <div class="hidden md:block">
              <svg class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </div>

            <!-- Step 3 -->
            <div class="md:w-1/3 text-center px-6">
              <div class="bg-indigo-100 rounded-full h-20 w-20 flex items-center justify-center mx-auto mb-4">
                <span class="text-indigo-600 font-bold text-2xl">3</span>
              </div>
              <h3 class="text-xl font-semibold mb-3">Download Result</h3>
              <p class="text-gray-600">Preview your converted document and download it immediately. All processing
                happens in your browser for total security.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-16 bg-white">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">Frequently Asked Questions</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">Find answers to common questions about our PDF conversion tool.</p>
        </div>

        <div class="max-w-3xl mx-auto">
          <!-- FAQ Item 1 -->
          <div class="mb-6 bg-gray-50 rounded-lg p-6 shadow-sm">
            <h3 class="text-xl font-semibold mb-2">Is PDFSavvy really 10cents to use?</h3>
            <p class="text-gray-600">Yes, PDFSavvy is completely free to use with no hidden fees. But you have to pay 10cents per documents as you need without any limitations.</p>
          </div>

          <!-- FAQ Item 2 -->
          <div class="mb-6 bg-gray-50 rounded-lg p-6 shadow-sm">
            <h3 class="text-xl font-semibold mb-2">Are my files secure when using PDFSavvy?</h3>
            <p class="text-gray-600">Absolutely. All file processing happens directly in your browser. Your files never
              leave your device or get uploaded to our servers, ensuring complete privacy and security.</p>
          </div>

          <!-- FAQ Item 3 -->
          <div class="mb-6 bg-gray-50 rounded-lg p-6 shadow-sm">
            <h3 class="text-xl font-semibold mb-2">What is the maximum file size I can convert?</h3>
            <p class="text-gray-600">Since all processing happens locally in your browser, the maximum file size depends
              on your device's capabilities. Generally, files up to 100MB can be processed smoothly.</p>
          </div>

          <!-- FAQ Item 4 -->
          <div class="mb-6 bg-gray-50 rounded-lg p-6 shadow-sm">
            <h3 class="text-xl font-semibold mb-2">How accurate are the conversions?</h3>
            <p class="text-gray-600">PDFSavvy uses advanced algorithms to ensure high-fidelity conversions. We strive to
              preserve formatting, images, tables, and fonts as accurately as possible across all supported formats.</p>
          </div>

          <!-- FAQ Item 5 -->
          <div class="bg-gray-50 rounded-lg p-6 shadow-sm">
            <h3 class="text-xl font-semibold mb-2">Do I need to create an account to use PDFSavvy?</h3>
            <p class="text-gray-600">No, PDFSavvy requires no registration or account creation. Simply visit our
              website, upload your file, and start converting instantly.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
      <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Get Started?</h2>
        <p class="text-lg text-gray-200 mb-8">Discover the ultimate PDF conversion tool. PDFSavvy helps you convert PDFs
          to DOCX, HTML, TXT, CSV, and XLSX quickly and securely. Try it today and experience the power and simplicity
          of our innovative solution.</p>
        <a href="#convert"
          class="btn-primary font-bold py-3 px-8 rounded-lg text-xl shadow-lg hover:shadow-xl transition border-white border-2">
          Start Converting Now
        </a>
      </div>
    </section>

    <!-- <section id="contact" class="py-16 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">Contact Us</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">Have questions or need assistance? Reach out to our support team for prompt help.</p>
        </div>
        
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
          <div class="md:flex">
            <div class="md:shrink-0">
              <img class="h-48 w-full object-cover md:h-full md:w-48" src="contact-image.jpg" alt="Contact Support">
            </div>
            <div class="p-8">
              <h3 class="text-xl font-semibold mb-4">Get In Touch</h3>
              <p class="text-gray-600 mb-4">We're here to help! Please fill out the form below or email us directly.</p>
              <form>
                <div class="mb-4">
                  <label class="block text-gray-700 font-medium mb-2" for="name">Your Name</label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter your name">
                </div>
                <div class="mb-4">
                  <label class="block text-gray-700 font-medium mb-2" for="email">Your Email</label>
                  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your email">
                </div>
                <div class="mb-6">
                  <label class="block text-gray-700 font-medium mb-2" for="message">Your Message</label>
                  <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" rows="4" placeholder="Enter your message"></textarea>
                </div>
                <div class="flex items-center justify-between">
                  <button class="btn-primary font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <?php
    include("footer.php");
    ?>
  </div>
</body>