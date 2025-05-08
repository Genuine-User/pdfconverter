<?php include 'header.php'; ?>

<body class="bg-gray-50 text-gray-800">
  <div class="min-h-screen flex flex-col">
    <!-- Main Content -->
    <section class="hero-gradient text-white py-16 md:py-24 relative">
      <div class="hero-pattern absolute inset-0"></div>
      <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
          <div class="md:w-1/2 mb-8 md:mb-0">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
              Convert HTML ↔ PDF with<br>
              <span class="text-indigo-400">Perfect Formatting</span>
            </h1>
            <p class="text-xl text-gray-300 mb-8 max-w-lg">
              Advanced DOCX and PDF conversion with font preservation, layout accuracy, and table formatting.
            </p>
          </div>
          <div class="md:w-1/2 flex justify-center">
            <div class="relative">
              <svg class="w-80 h-80 neon-glow" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="15" y="10" width="90" height="100" rx="4" fill="#1E293B" stroke="#818CF8" stroke-width="2"/>
                <rect x="25" y="20" width="70" height="10" rx="2" fill="#4F46E5" opacity="0.7"/>
                <rect x="25" y="35" width="70" height="5" rx="1" fill="#818CF8" opacity="0.5"/>
                <rect x="25" y="45" width="70" height="5" rx="1" fill="#818CF8" opacity="0.5"/>
                <rect x="25" y="55" width="70" height="5" rx="1" fill="#818CF8" opacity="0.5"/>
                <rect x="25" y="65" width="40" height="5" rx="1" fill="#818CF8" opacity="0.5"/>
                <rect x="25" y="80" width="30" height="20" rx="2" fill="#4F46E5" opacity="0.3"/>
                <rect x="65" y="80" width="30" height="20" rx="2" fill="#4F46E5" opacity="0.3"/>
                <path d="M35 20H55V30H35V20Z" fill="#4F46E5"/>
                <text x="38" y="27" fill="white" font-size="8" font-family="Arial, sans-serif" font-weight="bold">HTML</text>
                <g class="animate-pulse">
                  <path d="M90 65L85 60L80 65" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M85 60V75" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <circle cx="85" cy="40" r="10" fill="#6366F1" opacity="0.2" stroke="#6366F1" stroke-width="1"/>
                <path d="M80 40L85 45L90 40" stroke="#6366F1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Converter Section -->
    <section id="converter" class="py-16 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto converter-card rounded-2xl p-8 shadow-xl">
          <!-- Tabs -->
          <div class="flex mb-8 border-b border-gray-200">
            <button class="tab-button px-6 py-3 font-medium border-b-2 border-transparent active" data-mode="docx2pdf">
              HTML to PDF
            </button>
            <button class="tab-button px-6 py-3 font-medium border-b-2 border-transparent" data-mode="pdf2docx">
              PDF to HTML
            </button>
          </div>

          <!-- File Upload -->
          <div id="drop-zone" class="drop-zone rounded-xl p-8 text-center mb-6 cursor-pointer">
            <div class="mb-4 text-indigo-500">
              <svg class="w-12 h-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
              </svg>
            </div>
            <p class="text-lg font-medium mb-2">Drag & Drop Files Here</p>
            <p class="text-gray-600 mb-4">or click to browse your files</p>
            <input type="file" id="file-input" class="hidden" accept=".docx">
            <p id="file-name" class="text-sm text-gray-500 mt-4">No file selected</p>
          </div>

          <!-- Conversion Options -->
          <div id="conversion-options" class="space-y-4 mb-8">
            <div class="flex items-center space-x-3">
              <input type="checkbox" id="preserve-layout" class="rounded text-indigo-600" checked>
              <label for="preserve-layout" class="text-gray-700">Preserve original layout</label>
            </div>
            <div class="flex items-center space-x-3">
              <input type="checkbox" id="keep-fonts" class="rounded text-indigo-600" checked>
              <label for="keep-fonts" class="text-gray-700">Maintain original fonts</label>
            </div>
          </div>

          <!-- Progress Bar -->
          <div id="progress-container" class="hidden mb-8">
            <div class="flex justify-between mb-1">
              <span class="text-sm font-medium text-indigo-700">Converting...</span>
              <span id="progress-percent" class="text-sm font-medium text-indigo-700">0%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5">
              <div id="progress-bar" class="bg-indigo-600 h-2.5 rounded-full" style="width: 0%"></div>
            </div>
          </div>

          <!-- Convert Button -->
          <button id="convert-button" class="btn-primary w-full py-3 rounded-lg font-medium text-white transition-colors disabled:opacity-50 disabled:cursor-not-allowed" disabled>
            Convert Now
          </button>

          <!-- Feedback Message -->
          <div id="feedback-message" class="mt-4 text-center text-sm"></div>
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

    <?php include 'footer.php'; ?>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // DOM Elements
      const dropZone = document.getElementById('drop-zone');
      const fileInput = document.getElementById('file-input');
      const fileNameDisplay = document.getElementById('file-name');
      const convertButton = document.getElementById('convert-button');
      const progressContainer = document.getElementById('progress-container');
      const progressBar = document.getElementById('progress-bar');
      const progressPercent = document.getElementById('progress-percent');
      const feedbackMessage = document.getElementById('feedback-message');
      const tabButtons = document.querySelectorAll('.tab-button');
      const preserveLayoutCheckbox = document.getElementById('preserve-layout');
      const keepFontsCheckbox = document.getElementById('keep-fonts');
      
      // State variables
      let currentMode = 'docx2pdf';
      let selectedFile = null;

      // Initialize UI
      updateUIForMode(currentMode);

      // Tab switching
      tabButtons.forEach(button => {
        button.addEventListener('click', function() {
          currentMode = this.dataset.mode;
          updateUIForMode(currentMode);
          
          // Update file input accept attribute based on mode
          fileInput.accept = currentMode === 'docx2pdf' ? '.docx' : '.pdf';
          
          // Reset file selection when switching modes
          selectedFile = null;
          fileNameDisplay.textContent = 'No file selected';
          fileInput.value = '';
          convertButton.disabled = true;
          feedbackMessage.textContent = '';
        });
      });

      // File input change handler
      fileInput.addEventListener('change', function(e) {
        if (e.target.files.length > 0) {
          handleFileSelection(e.target.files[0]);
        }
      });

      // Drop zone event handlers
      dropZone.addEventListener('dragover', function(e) {
        e.preventDefault();
        dropZone.classList.add('drop-zone-active');
      });

      dropZone.addEventListener('dragleave', function() {
        dropZone.classList.remove('drop-zone-active');
      });

      dropZone.addEventListener('drop', function(e) {
        e.preventDefault();
        dropZone.classList.remove('drop-zone-active');
        
        if (e.dataTransfer.files.length > 0) {
          handleFileSelection(e.dataTransfer.files[0]);
          fileInput.files = e.dataTransfer.files; // Sync with file input
        }
      });

      dropZone.addEventListener('click', function() {
        fileInput.click();
      });

      // Convert button click handler
      convertButton.addEventListener('click', async function() {
        if (!selectedFile) {
          showFeedback('Please select a file first', 'error');
          return;
        }

        // Validate file type
        if (currentMode === 'docx2pdf' && !selectedFile.name.toLowerCase().endsWith('.docx')) {
          showFeedback('Please select a DOCX file for DOCX to PDF conversion', 'error');
          return;
        }

        if (currentMode === 'pdf2docx' && !selectedFile.name.toLowerCase().endsWith('.pdf')) {
          showFeedback('Please select a PDF file for PDF to DOCX conversion', 'error');
          return;
        }

        try {
          // Show progress
          progressContainer.classList.remove('hidden');
          progressBar.style.width = '0%';
          progressPercent.textContent = '0%';
          convertButton.disabled = true;
          
          // Perform conversion based on mode
          if (currentMode === 'docx2pdf') {
            await convertDocxToPdf(selectedFile);
          } else {
            await convertPdfToDocx(selectedFile);
          }
          
          // Conversion complete
          progressBar.style.width = '100%';
          progressPercent.textContent = '100%';
          showFeedback('Conversion completed successfully!', 'success');
        } catch (error) {
          console.error('Conversion error:', error);
          showFeedback('Conversion failed: ' + error.message, 'error');
          progressContainer.classList.add('hidden');
        } finally {
          convertButton.disabled = false;
        }
      });

      // Helper functions
      function updateUIForMode(mode) {
        tabButtons.forEach(button => {
          const isActive = button.dataset.mode === mode;
          button.classList.toggle('active', isActive);
          button.classList.toggle('border-indigo-500', isActive);
          button.classList.toggle('text-indigo-600', isActive);
          button.classList.toggle('text-gray-700', !isActive);
        });
      }

      function handleFileSelection(file) {
        selectedFile = file;
        fileNameDisplay.textContent = file.name;
        convertButton.disabled = false;
        feedbackMessage.textContent = '';
      }

      function showFeedback(message, type) {
        feedbackMessage.textContent = message;
        feedbackMessage.className = 'mt-4 text-center text-sm';
        
        if (type === 'error') {
          feedbackMessage.classList.add('text-red-600');
        } else if (type === 'success') {
          feedbackMessage.classList.add('text-green-600');
        } else {
          feedbackMessage.classList.add('text-gray-600');
        }
      }

      function updateProgress(percent) {
        progressBar.style.width = `${percent}%`;
        progressPercent.textContent = `${percent}%`;
      }

      // Conversion functions
      async function convertDocxToPdf(file) {
        updateProgress(10);
        
        // Read file as array buffer
        const arrayBuffer = await readFileAsArrayBuffer(file);
        updateProgress(30);
        
        // Convert DOCX to HTML using mammoth
        const { value: html } = await mammoth.convertToHtml({ arrayBuffer });
        updateProgress(60);
        
        // Create PDF from HTML
        const { jsPDF } = window.jspdf;
        const pdf = new jsPDF({
          orientation: 'portrait',
          unit: 'mm',
          format: 'a4'
        });
        
        await pdf.html(html, {
          callback: (pdf) => {
            pdf.save(file.name.replace(/\.docx?$/i, '.pdf'));
            updateProgress(100);
          },
          html2canvas: {
            scale: 0.95,
            letterRendering: true
          },
          x: 10,
          y: 10,
          width: 190 // A4 width in mm (210 - 20mm margins)
        });
      }

      async function convertPdfToDocx(file) {
        updateProgress(10);
        
        // Read file as array buffer
        const arrayBuffer = await readFileAsArrayBuffer(file);
        updateProgress(30);
        
        // Load PDF document
        const pdfDoc = await PDFLib.PDFDocument.load(arrayBuffer);
        updateProgress(50);
        
        // Extract text from each page
        const pages = pdfDoc.getPages();
        const paragraphs = [];
        
        for (const page of pages) {
          const textContent = await page.getTextContent();
          const text = textContent.items.map(item => item.str).join(' ');
          paragraphs.push(new docx.Paragraph({
            children: [new docx.TextRun(text)],
            spacing: { after: 200 }
          }));
        }
        updateProgress(80);
        
        // Create DOCX document
        const doc = new docx.Document({
          sections: [{
            properties: {},
            children: paragraphs
          }]
        });
        
        // Save DOCX file
        const packer = new docx.Packer();
        const blob = await packer.toBlob(doc);
        saveAs(blob, file.name.replace(/\.pdf$/i, '.docx'));
        updateProgress(100);
      }

      function readFileAsArrayBuffer(file) {
        return new Promise((resolve, reject) => {
          const reader = new FileReader();
          reader.onload = () => resolve(reader.result);
          reader.onerror = reject;
          reader.readAsArrayBuffer(file);
        });
      }
    });
  </script>
</body>