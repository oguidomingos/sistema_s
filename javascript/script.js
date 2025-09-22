// Smooth scrolling for navigation links
document.addEventListener('DOMContentLoaded', function() {
    
    // Smooth scroll functionality
    function scrollToSection(sectionId) {
        const element = document.getElementById(sectionId);
        if (element) {
            element.scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        }
    }

    // Handle scroll links
    document.querySelectorAll('.scroll-link, .scroll-to-contact').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            let targetId;
            
            if (this.classList.contains('scroll-to-contact')) {
                targetId = 'contato';
            } else {
                const href = this.getAttribute('href');
                targetId = href.substring(1); // Remove the '#'
            }
            
            scrollToSection(targetId);
            
            // Close mobile menu if open
            const mobileMenu = document.querySelector('.mobile-menu');
            const menuToggle = document.querySelector('.mobile-menu-toggle');
            if (mobileMenu && menuToggle) {
                mobileMenu.classList.add('hidden');
                document.querySelector('.menu-icon').classList.remove('hidden');
                document.querySelector('.close-icon').classList.add('hidden');
            }
        });
    });

    // Mobile menu toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    const menuIcon = document.querySelector('.menu-icon');
    const closeIcon = document.querySelector('.close-icon');

    if (mobileMenuToggle && mobileMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    }

    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
                entry.target.classList.remove('opacity-0');
            }
        });
    }, observerOptions);

    // Observe all sections for animations
    document.querySelectorAll('section').forEach(section => {
        if (!section.classList.contains('animate-fade-in')) {
            section.classList.add('opacity-0');
            observer.observe(section);
        }
    });

    // Form submission handling
    const form = document.querySelector('form[action*="admin-post.php"]');
    if (form) {
        form.addEventListener('submit', function(e) {
            const button = form.querySelector('button[type="submit"]');
            if (button) {
                button.innerHTML = `
                    <svg class="mr-3 animate-spin" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M21 12a9 9 0 11-6.219-8.56"/>
                    </svg>
                    Enviando...
                `;
                button.disabled = true;
            }
        });
    }

    // Add some extra effects on scroll
    window.addEventListener('scroll', function() {
        const header = document.getElementById('masthead');
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (header) {
            if (scrollTop > 100) {
                header.style.background = 'rgba(10, 10, 11, 0.95)';
                header.style.backdropFilter = 'blur(20px)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.05)';
                header.style.backdropFilter = 'blur(12px)';
            }
        }
    });

    // Add hover effects to glass cards
    document.querySelectorAll('.glass-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.boxShadow = '0 12px 40px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.15)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 8px 32px rgba(0, 0, 0, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.1)';
        });
    });

    // Add pulse effect to important elements
    function addPulseEffect() {
        const pulseElements = document.querySelectorAll('.animate-glow-pulse');
        pulseElements.forEach(element => {
            element.style.animation = 'glow-pulse 2s ease-in-out infinite';
        });
    }

    addPulseEffect();

    // Timeline animation functionality
    function initTimelineAnimations() {
        const timelineItems = document.querySelectorAll('.timeline-item');
        
        if (timelineItems.length === 0) return;
        
        const timelineObserver = new IntersectionObserver(function(entries) {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    // Add a slight delay for each item to create a staggered effect
                    setTimeout(() => {
                        entry.target.classList.add('animate-fade-in');
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 100);
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        });

        // Observe all timeline items
        timelineItems.forEach(item => {
            timelineObserver.observe(item);
        });
    }

    // Initialize timeline animations
    initTimelineAnimations();

    // Enhanced scroll functionality for timeline section
    function scrollToTimeline() {
        const timelineSection = document.getElementById('timeline');
        if (timelineSection) {
            timelineSection.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }

    // Add timeline navigation if needed
    document.querySelectorAll('a[href="#timeline"], .scroll-to-timeline').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            scrollToTimeline();
        });
    });

    // Toast notification system for form success
    function showToast(message, type = 'success') {
        const toast = document.createElement('div');
        toast.className = `fixed top-4 right-4 z-50 glass-card p-4 rounded-lg transition-all duration-300 transform translate-x-full`;
        
        if (type === 'success') {
            toast.classList.add('border-green-500/30');
        } else {
            toast.classList.add('border-red-500/30');
        }
        
        toast.innerHTML = `
            <div class="flex items-center gap-3">
                <svg class="text-green-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M20 6L9 17l-5-5"/>
                </svg>
                <span class="text-netword-white">${message}</span>
            </div>
        `;
        
        document.body.appendChild(toast);
        
        // Animate in
        setTimeout(() => {
            toast.classList.remove('translate-x-full');
        }, 100);
        
        // Animate out after 5 seconds
        setTimeout(() => {
            toast.classList.add('translate-x-full');
            setTimeout(() => {
                document.body.removeChild(toast);
            }, 300);
        }, 5000);
    }

    // Check for success message in URL
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('success') === '1') {
        showToast('Diagnóstico solicitado com sucesso! Entraremos em contato em até 2 horas úteis.');
        // Clean up URL
        window.history.replaceState({}, document.title, window.location.pathname);
    }
});