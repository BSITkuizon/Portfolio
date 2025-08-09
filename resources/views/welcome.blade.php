<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Load Poppins (500 and 600 weights) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <style>
        /* Fallback font stack for browsers that don't support CSS variables */
        @supports not (font-variation-settings: normal) {
            body {
                font-family: 'Poppins', 'Helvetica Neue', Arial, sans-serif;
            }
        }

        /* .stroke {
         -webkit-text-stroke: 1px black;
         color: transparent; 
       } */
    </style>
</head>


<body class="bg-gray-50 antialiased">
    <!-- Main Navigation -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-sm shadow-sm transition-all duration-300">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 md:h-20">
                <!-- Logo/Branding -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="#home" class="flex items-center space-x-2 group" aria-label="Home">
                        <span class="text-2xl font-bold text-blue-900 group-hover:text-blue-500 transition-colors duration-200">KyleDev</span>
                        <span class="hidden md:inline-block h-6 w-px bg-gray-200 mx-2" aria-hidden="true"></span>
                        <!-- <span class="hidden md:inline-block text-sm font-medium text-gray-500">Senior Frontend Developer</span> -->
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-6">
                    <div class="hidden lg:flex items-center space-x-6">
                        <a href="#home" class="relative px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200 group">
                            Home
                            <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-3/4"></span>
                        </a>
                        <a href="#projects" class="relative px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200 group">
                            Projects
                            <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-3/4"></span>
                        </a>
                        <a href="#skills" class="relative px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200 group">
                            Skills
                            <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-3/4"></span>
                        </a>
                        <a href="#experience" class="relative px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200 group">
                            Experience
                            <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-3/4"></span>
                        </a>
                        <a href="#contact" class="relative px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200 group">
                            Contact
                            <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-3/4"></span>
                        </a>
                    </div>

                    <!-- Call-to-action button -->
                    <div class="ml-4 flex items-center space-x-4">
                        <a href="https://github.com/BSITkuizon" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-gray-500 transition-colors duration-200">
                            <span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="https://linkedin.com/in/yourusername" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-gray-500 transition-colors duration-200">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                        <a href="#contact" class="ml-2 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-blue-600 to-sky-600 hover:from-blue-700 hover:to-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 transform hover:-translate-y-0.5">
                            Hire Me
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 transition-all duration-200" aria-expanded="false" id="mobile-menu-button">
                        <span class="sr-only">Open main menu</span>
                        <!-- Hamburger icon -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Mobile menu (hidden by default) -->
        <div class="hidden md:hidden bg-white/95 backdrop-blur-sm shadow-lg transition-all duration-300 ease-in-out" id="mobile-menu">
            <div class="pt-2 pb-4 space-y-1">
                <a href="#home" class="block px-4 py-3 text-base font-medium text-gray-900 hover:text-blue-600 hover:bg-gray-50/50 transition-colors duration-200">Home</a>
                <a href="#projects" class="block px-4 py-3 text-base font-medium text-gray-900 hover:text-blue-600 hover:bg-gray-50/50 transition-colors duration-200">Projects</a>
                <a href="#skills" class="block px-4 py-3 text-base font-medium text-gray-900 hover:text-blue-600 hover:bg-gray-50/50 transition-colors duration-200">Skills</a>
                <a href="#experience" class="block px-4 py-3 text-base font-medium text-gray-900 hover:text-blue-600 hover:bg-gray-50/50 transition-colors duration-200">Experience</a>
                <a href="#contact" class="block px-4 py-3 text-base font-medium text-gray-900 hover:text-blue-600 hover:bg-gray-50/50 transition-colors duration-200">Contact</a>
                <div class="mt-2 px-4 pt-2 border-t border-gray-200">
                    <div class="flex justify-center space-x-4">
                        <a href="https://github.com/yourusername" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="https://linkedin.com/in/yourusername" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                    </div>
                    <a href="#contact" class="mt-4 block w-full text-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-blue-600 to-sky-600 hover:from-blue-700 hover:to-sky-700 transition-colors duration-200">
                        Hire Me Now
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section id="home" class="min-h-150  bg-white flex items-center py-5 lg:py-0 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
                <!-- Left Content -->
                <div class="lg:col-span-7 text-center lg:text-left">
                    <div class="lg:max-w-2xl lg:mx-0 mx-auto">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block">Kyle P. Kuizon</span>
                            <span class="block bg-gradient-to-r from-blue-600 to-sky-100 hover:from-blue-700 hover:to-sky-700 bg-clip-text text-transparent transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Frontend Developer</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg md:mt-5 md:text-xl max-w-lg mx-auto lg:mx-0">
                            A passionate <span className="text-cyan-300 font-medium">Frontend Developer</span> dedicated to crafting beautiful, responsive web experiences. Fresh perspective meets technical skills, ready to contribute to meaningful projects while growing alongside experienced teams.

                        </p>
                        <div class="mt-8 max-w-lg mx-auto lg:mx-0 lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:space-x-4 space-y-3 sm:space-y-0 justify-center lg:justify-start">
                                <a href="#contact" class="flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 md:py-4 md:text-lg md:px-10 transition-colors duration-200">
                                    Hire Me
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#projects" class="flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 md:py-4 md:text-lg md:px-10 transition-colors duration-200">
                                    View Projects
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Image - Now visible on all screens -->
                <div class="lg:col-span-5 mt-12 lg:mt-0 flex justify-center lg:justify-end">
                    <div class="relative group cursor-pointer h-64 w-64 sm:h-72 sm:w-72 md:h-80 md:w-80 lg:h-96 lg:w-96">
                        <!-- Glowing gradient border -->
                        <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-sky-600 rounded-full blur opacity-100 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>

                        <!-- Profile image container -->
                        <div class="relative h-full w-full rounded-full overflow-hidden ring-1 ring-gray-900/5">
                            <img class="w-full h-full object-cover" src="/img/kyle.jpg" alt="Profile picture of Kyle P. Kuizon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Tech Stack Section -->
    <section id="tech-stack" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    <span class="block">My Tech Stack</span>
                    <span class="block bg-gradient-to-r from-blue-600 to-sky-100 bg-clip-text text-transparent mt-2">
                        Tools & Technologies
                    </span>
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-lg text-gray-500 sm:mt-4">
                    The technologies I work with daily to create amazing web experiences
                </p>
            </div>

            <div class="mt-12">
                <!-- Mobile horizontal scroll container -->
                <div class=" overflow-x-auto pb-4 -mx-4 px-4">
                    <div class="flex space-x-8 w-max">
                        <!-- Tech Items (same as before but without col-span classes) -->
                        <div class="flex flex-col items-center group w-32 flex-shrink-0">
                            <div class="p-4 rounded-lg bg-white shadow-md group-hover:shadow-lg transition-all duration-300 transform group-hover:-translate-y-1">
                                <img class="h-12 w-12 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript">
                            </div>
                            <h3 class="mt-3 text-sm font-medium text-gray-900">JavaScript</h3>
                        </div>

                        <div class="flex flex-col items-center group w-32 flex-shrink-0">
                            <div class="p-4 rounded-lg bg-white shadow-md group-hover:shadow-lg transition-all duration-300 transform group-hover:-translate-y-1">
                                <img class="h-12 w-12 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git">
                            </div>
                            <h3 class="mt-3 text-sm font-medium text-gray-900">Git</h3>
                        </div>

                        <div class="flex flex-col items-center group w-32 flex-shrink-0">
                            <div class="p-4 rounded-lg bg-white shadow-md group-hover:shadow-lg transition-all duration-300 transform group-hover:-translate-y-1">
                                <img class="h-12 w-12 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub">
                            </div>
                            <h3 class="mt-3 text-sm font-medium text-gray-900">GitHub</h3>
                        </div>

                        <div class="flex flex-col items-center group w-32 flex-shrink-0">
                            <div class="p-4 rounded-lg bg-white shadow-md group-hover:shadow-lg transition-all duration-300 transform group-hover:-translate-y-1">
                                <img class="h-12 w-12 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5">
                            </div>
                            <h3 class="mt-3 text-sm font-medium text-gray-900">HTML5</h3>
                        </div>

                        <div class="flex flex-col items-center group w-32 flex-shrink-0">
                            <div class="p-4 rounded-lg bg-white shadow-md group-hover:shadow-lg transition-all duration-300 transform group-hover:-translate-y-1">
                                <img class="h-12 w-12 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3">
                            </div>
                            <h3 class="mt-3 text-sm font-medium text-gray-900">CSS3</h3>
                        </div>

                        <div class="flex flex-col items-center group w-32 flex-shrink-0">
                            <div class="p-4 rounded-lg bg-white shadow-md group-hover:shadow-lg transition-all duration-300 transform group-hover:-translate-y-1">
                                <img class="h-12 w-12 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap">
                            </div>
                            <h3 class="mt-3 text-sm font-medium text-gray-900">Bootstrap</h3>
                        </div>

                        <div class="flex flex-col items-center group w-32 flex-shrink-0">
                            <div class="p-4 rounded-lg bg-white shadow-md group-hover:shadow-lg transition-all duration-300 transform group-hover:-translate-y-1">
                                <img class="h-12 w-12 object-contain" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP">
                            </div>
                            <h3 class="mt-3 text-sm font-medium text-gray-900">PHP</h3>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    <span class="block">My Projects</span>
                    <span class="block bg-gradient-to-r from-blue-600 to-sky-100 bg-clip-text text-transparent mt-2">
                        Recent Work
                    </span>
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-lg text-gray-500 sm:mt-4">
                    Here are some of my recent projects. More coming soon!
                </p>
            </div>

            <div class="mt-12">
                <!-- Projects Container - Will automatically adjust for multiple projects -->
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Project Item 1 - Current Project -->
                    <div class="group relative overflow-hidden rounded-xl shadow-lg transition-all duration-300 hover:shadow-xl">
                        <!-- Project Image -->
                        <div class="h-64 overflow-hidden">
                            <img
                                class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                alt="Project screenshot">
                        </div>

                        <!-- Project Content -->
                        <div class="bg-white p-6">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold text-gray-900">My Portfolio Website</h3>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Latest
                                </span>
                            </div>

                            <p class="mt-3 text-gray-600">
                                A responsive portfolio website built with HTML, CSS, and JavaScript to showcase my work and skills.
                            </p>

                            <!-- Technologies Used -->
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    HTML5
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    CSS3
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    JavaScript
                                </span>
                            </div>

                            <!-- Project Links -->
                            <div class="mt-6 flex space-x-4">
                                <a
                                    href="https://leopards.online/"
                                    class="inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-800">
                                    Live Demo
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                                <!-- <a 
                href="#" 
                class="inline-flex items-center text-sm font-medium text-gray-600 hover:text-gray-800"
              >
                Source Code
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </a> -->
                            </div>
                        </div>
                    </div>

                    <!-- Empty State for Future Projects -->
                    <!-- Remove this when adding real projects -->
                    <div class="hidden md:block group relative overflow-hidden rounded-xl border-2 border-dashed border-gray-300 min-h-[400px] flex items-center justify-center">
                        <div class="text-center p-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                            <h3 class="mt-2 text-lg font-medium text-gray-700">New Project Coming Soon</h3>
                            <p class="mt-1 text-gray-500">Working on something exciting!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Skills Section -->
    <section id="skills" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    <span class="block">My Skills</span>
                    <span class="block bg-gradient-to-r from-blue-600 to-sky-100 bg-clip-text text-transparent mt-2">
                        What I Bring to the Table
                    </span>
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-lg text-gray-500 sm:mt-4">
                    As a fresh graduate, I combine foundational technical knowledge with strong collaborative skills and a passion for continuous learning.
                </p>
            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-2">
                <!-- Technical Skills -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-blue-100 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="ml-4 text-xl font-bold text-gray-900">Technical Skills</h3>
                    </div>

                    <div class="mt-6">
                        <div class="space-y-4">
                            <!-- Skill Item 1 -->
                            <div>
                                <div class="flex justify-between">
                                    <span class="text-sm font-medium text-gray-700">HTML/CSS</span>
                                    <span class="text-xs font-medium text-gray-500">Intermediate</span>
                                </div>
                                <div class="mt-1 w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div>
                                </div>
                            </div>

                            <!-- Skill Item 2 -->
                            <div>
                                <div class="flex justify-between">
                                    <span class="text-sm font-medium text-gray-700">JavaScript</span>
                                    <span class="text-xs font-medium text-gray-500">Basic</span>
                                </div>
                                <div class="mt-1 w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 60%"></div>
                                </div>
                            </div>

                            <!-- Skill Item 2 -->
                            <div>
                                <div class="flex justify-between">
                                    <span class="text-sm font-medium text-gray-700">BootStrap</span>
                                    <span class="text-xs font-medium text-gray-500">Intermediate</span>
                                </div>
                                <div class="mt-1 w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 70%"></div>
                                </div>
                            </div>

                            <!-- Skill Item 3 -->
                            <div>
                                <div class="flex justify-between">
                                    <span class="text-sm font-medium text-gray-700">PHP</span>
                                    <span class="text-xs font-medium text-gray-500">Basic</span>
                                </div>
                                <div class="mt-1 w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 60%"></div>
                                </div>
                            </div>

                            <!-- Skill Item 4 -->
                            <div>
                                <div class="flex justify-between">
                                    <span class="text-sm font-medium text-gray-700">Git/GitHub</span>
                                    <span class="text-xs font-medium text-gray-500">Intermediate</span>
                                </div>
                                <div class="mt-1 w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-blue-600 h-2 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <h4 class="text-sm font-medium text-gray-500">Currently Learning:</h4>
                            <div class="mt-2 flex flex-wrap gap-2">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    ReactJs
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Tailwindcss
                                </span>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Laravel
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Soft Skills -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-green-100 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="ml-4 text-xl font-bold text-gray-900">Soft Skills</h3>
                    </div>

                    <div class="mt-6">
                        <div class="space-y-4">
                            <!-- Soft Skill 1 -->
                            <div class="flex">
                                <div class="flex-shrink-0 text-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h4 class="text-sm font-medium text-gray-900">Collaboration</h4>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Proven ability to work effectively in team environments during internships and academic projects.
                                    </p>
                                </div>
                            </div>

                            <!-- Soft Skill 2 -->
                            <div class="flex">
                                <div class="flex-shrink-0 text-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h4 class="text-sm font-medium text-gray-900">Communication</h4>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Clear communicator with experience presenting technical concepts to diverse audiences.
                                    </p>
                                </div>
                            </div>

                            <!-- Soft Skill 3 -->
                            <div class="flex">
                                <div class="flex-shrink-0 text-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h4 class="text-sm font-medium text-gray-900">Adaptability</h4>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Quick learner who thrives in dynamic environments and embraces new challenges.
                                    </p>
                                </div>
                            </div>

                            <!-- Soft Skill 4 -->
                            <div class="flex">
                                <div class="flex-shrink-0 text-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h4 class="text-sm font-medium text-gray-900">Problem Solving</h4>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Analytical thinker with strong troubleshooting skills developed through academic projects.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="rounded-md bg-blue-50 p-4">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-sm font-medium text-blue-800">Growth Mindset</h3>
                                        <div class="mt-2 text-sm text-blue-700">
                                            <p>
                                                As a recent graduate, I'm eager to expand my skill set and contribute to meaningful projects while learning from experienced professionals.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <!-- Experience Section -->
    <section id="experience" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    <span class="block">My Experience</span>
                    <span class="block bg-gradient-to-r from-blue-600 to-sky-100 bg-clip-text text-transparent mt-2">
                        Professional Journey
                    </span>
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-lg text-gray-500 sm:mt-4">
                    While I'm just starting my career, my internship provided valuable real-world experience.
                </p>
            </div>

            <div class="mt-12 space-y-12">
                <!-- Experience Item -->
                <div class="relative">
                    <!-- Timeline line -->
                    <div class="hidden md:block absolute left-8 top-0 bottom-0 w-0.5 bg-gray-200 transform -translate-x-1/2"></div>

                    <div class="relative md:grid md:grid-cols-5 md:gap-8">
                        <!-- Date/Time -->
                        <div class="md:col-span-1 flex md:justify-end">
                            <div class="relative md:pr-8">
                                <div class="flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 text-blue-600 shadow-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div class="min-w-0 mt-4 text-center md:text-right">
                                    <p class="text-sm font-medium text-gray-900">Jan 2025 - Apr 2025</p>
                                    <p class="text-sm text-gray-500">Internship</p>
                                </div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="mt-8 md:mt-0 md:col-span-4">
                            <div class="bg-gray-50 rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                                <h3 class="text-xl font-bold text-gray-900">Frontend Developer Intern</h3>
                                <p class="text-lg font-medium text-blue-600 mt-1">CDL Innovative IT Solutions, Hilongos, Leyte</p>
                                
                                <div class="mt-4 text-gray-600 space-y-4">
                                    <p>
                                        Developed the <span class="font-medium">Leopards MotorBoat Service Online Booking System</span>, a web application that streamlined ticket reservations and scheduling for a local boat service.
                                    </p>
                                    
                                    <div class="bg-white p-4 rounded-md border border-gray-200">
                                        <h4 class="font-medium text-gray-900 mb-2">Key Contributions:</h4>
                                        <ul class="list-disc pl-5 space-y-1">
                                            <li>Collaborated with a team of 3 interns to design and implement the booking interface</li>
                                            <li>Developed responsive frontend components using HTML, CSS, JavaScript, and Bootstrap</li>
                                            <li>Implemented form validation and user feedback mechanisms</li>
                                            <li>Assisted in integrating frontend with backend PHP functionality</li>
                                            <li>Participated in weekly code reviews and sprint planning meetings</li>
                                        </ul>
                                    </div>
                                    
                                    <p>
                                        After the internship period (April 2025), I continued enhancing the system for an additional month, improving UI/UX and fixing bugs based on user feedback.
                                    </p>
                                </div>
                                
                                <div class="mt-6">
                                    <h4 class="text-sm font-medium text-gray-500">Technologies Used:</h4>
                                    <div class="mt-2 flex flex-wrap gap-2">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                            HTML5
                                        </span>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                            CSS3
                                        </span>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                            JavaScript
                                        </span>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                            Bootstrap
                                        </span>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                            PHP
                                        </span>
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                            Git
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Future Experience Placeholder -->
                <div class="relative pt-12">
                    <div class="relative md:grid md:grid-cols-5 md:gap-8">
                        <div class="md:col-span-1 flex md:justify-end">
                            <div class="relative md:pr-8">
                                <div class="flex items-center justify-center h-12 w-12 rounded-full bg-gray-100 text-gray-400 shadow-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="min-w-0 mt-4 text-center md:text-right">
                                    <p class="text-sm font-medium text-gray-400">Future</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8 md:mt-0 md:col-span-4">
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <h3 class="mt-2 text-lg font-medium text-gray-600">Next Opportunity</h3>
                                <p class="mt-1 text-gray-500">Eager to gain more professional experience and contribute to meaningful projects.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    <span class="block">Get In Touch</span>
                    <span class="block bg-gradient-to-r from-blue-600 to-sky-100 bg-clip-text text-transparent mt-2">
                        Let's Work Together
                    </span>
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-lg text-gray-500 sm:mt-4">
                    Whether you have a project in mind or just want to connect, I'd love to hear from you.
                </p>
            </div>

            <div class="mt-12 grid gap-8 lg:grid-cols-2">
                <!-- Contact Information -->
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900">Contact Information</h3>
                    <p class="mt-2 text-gray-600">Feel free to reach out through any of these channels.</p>

                    <div class="mt-6 space-y-6">
                        <!-- Email -->
                        <div class="flex">
                            <div class="flex-shrink-0 bg-blue-100 rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-gray-500">Email</h4>
                                <a href="mailto:kuizonkyle@gmail.com" class="mt-1 text-base font-medium text-gray-900 hover:text-blue-600 transition-colors duration-200">kuizonkyle@gmail.com</a>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex">
                            <div class="flex-shrink-0 bg-green-100 rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-gray-500">Phone</h4>
                                <a href="tel:+639123456789" class="mt-1 text-base font-medium text-gray-900 hover:text-green-600 transition-colors duration-200">+63 912 345 6789</a>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="flex">
                            <div class="flex-shrink-0 bg-purple-100 rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-gray-500">Location</h4>
                                <p class="mt-1 text-base font-medium text-gray-900">Hilongos, Leyte, Philippines</p>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="pt-6">
                            <h4 class="text-sm font-medium text-gray-500">Connect with me</h4>
                            <div class="mt-4 flex space-x-5">
                                <a href="https://github.com/BSITkuizon" target="_blank" class="text-gray-400 hover:text-gray-500 transition-colors duration-200">
                                    <span class="sr-only">GitHub</span>
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="https://linkedin.com/in/yourusername" target="_blank" class="text-gray-400 hover:text-gray-500 transition-colors duration-200">
                                    <span class="sr-only">LinkedIn</span>
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                    </svg>
                                </a>
                                <a href="https://twitter.com/yourusername" target="_blank" class="text-gray-400 hover:text-blue-400 transition-colors duration-200">
                                    <span class="sr-only">Twitter</span>
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900">Send Me a Message</h3>
                    <form class="mt-6 space-y-6" id="contactForm">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name" required class="py-3 px-4 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1">
                                <input type="email" name="email" id="email" required class="py-3 px-4 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                            <div class="mt-1">
                                <input type="text" name="subject" id="subject" required class="py-3 px-4 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <div class="mt-1">
                                <textarea id="message" name="message" rows="4" required class="py-3 px-4 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
                            </div>
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="w-full flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-blue-600 to-sky-600 hover:from-blue-700 hover:to-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 transform hover:-translate-y-0.5">
                                Send Message
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                    
                    <!-- Success Message (hidden by default) -->
                    <div id="successMessage" class="hidden mt-4 p-4 rounded-md bg-green-50">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-green-800">
                                    Thank you! Your message has been sent successfully. I'll get back to you soon.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex justify-center md:order-2 space-x-6">
                    <a href="https://github.com/BSITkuizon" target="_blank" class="text-gray-400 hover:text-white transition-colors duration-200">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://linkedin.com/in/yourusername" target="_blank" class="text-gray-400 hover:text-white transition-colors duration-200">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                </div>
                <div class="mt-8 md:mt-0 md:order-1">
                    <p class="text-center text-base text-gray-400">
                        &copy; 2025 Kyle P. Kuizon. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for form submission and mobile menu -->
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Form submission
        const contactForm = document.getElementById('contactForm');
        const successMessage = document.getElementById('successMessage');
        
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Here you would typically send the form data to a server
            // For this example, we'll just show the success message
            contactForm.reset();
            successMessage.classList.remove('hidden');
            
            // Hide success message after 5 seconds
            setTimeout(() => {
                successMessage.classList.add('hidden');
            }, 5000);
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
    </script>

    <!-- JavaScript for enhanced functionality -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            const isHidden = menu.classList.contains('hidden');

            if (isHidden) {
                menu.classList.remove('hidden');
                this.setAttribute('aria-expanded', 'true');
                this.classList.add('text-blue-600');

                // Change icon to X when menu is open
                this.innerHTML = `
                    <span class="sr-only">Close main menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                `;
            } else {
                menu.classList.add('hidden');
                this.setAttribute('aria-expanded', 'false');
                this.classList.remove('text-blue-600');

                // Change back to hamburger when menu is closed
                this.innerHTML = `
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                `;
            }
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.add('hidden');
                document.getElementById('mobile-menu-button').setAttribute('aria-expanded', 'false');
                document.getElementById('mobile-menu-button').classList.remove('text-blue-600');
                document.getElementById('mobile-menu-button').innerHTML = `
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                `;
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });

                    // Update URL without jumping
                    if (history.pushState) {
                        history.pushState(null, null, targetId);
                    } else {
                        location.hash = targetId;
                    }
                }
            });
        });

        // Add scroll effect to navbar
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 10) {
                header.classList.add('shadow-md');
                header.classList.remove('shadow-sm');
            } else {
                header.classList.remove('shadow-md');
                header.classList.add('shadow-sm');
            }
        });
    </script>

</body>

</html>