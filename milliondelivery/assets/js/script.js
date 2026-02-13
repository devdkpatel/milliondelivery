document.addEventListener('DOMContentLoaded', () => {

    // --- Mobile Menu Toggle ---
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const nav = document.querySelector('nav');
    
    if (mobileMenuBtn && nav) {
        mobileMenuBtn.addEventListener('click', () => {
            nav.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active'); // For hamburger animation
            document.body.classList.toggle('no-scroll');
        });

        // Close button logic
        const closeBtn = document.querySelector('.mobile-close-btn');
        if (closeBtn) {
            closeBtn.addEventListener('click', () => {
                nav.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
                document.body.classList.remove('no-scroll');
            });
        }

        // Close menu when clicking a link
        nav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
                document.body.classList.remove('no-scroll');
            });
        });
    }


    // --- Testimonials Slider ---
    // (Ensure these classes exist in HTML: .testi-quote, .testi-author h4, .testi-date, .prev-btn, .next-btn, .testi-dots)
    
    const testimonials = [
        {
            quote: "I was very pleased with the service. The delivery was fast and the package arrived safely. Highly recommended!",
            author: "John Doe",
            date: "2 days ago"
        },
        {
            quote: "Excellent experience! The team was professional and handled my fragile items with care.",
            author: "Jane Smith",
            date: "1 week ago"
        },
        {
            quote: "Reliable and cost-effective. Will definitely use their services again for my business shipments.",
            author: "Robert Brown",
            date: "3 weeks ago"
        }
    ];

    let currentTestimonialIndex = 0;
    const testiQuote = document.querySelector('.testi-quote');
    const testiAuthorName = document.querySelector('.testi-author h4');
    const testiDate = document.querySelector('.testi-date');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const dotsContainer = document.querySelector('.testi-dots');

    function updateTestimonial(index) {
        if (!testiQuote || !testiAuthorName || !testiDate) return;

        // Fade out
        const contentInner = document.querySelector('.testi-content-inner');
        if(contentInner) contentInner.style.opacity = '0.5';

        setTimeout(() => {
            const data = testimonials[index];
            testiQuote.textContent = `"${data.quote}"`;
            testiAuthorName.textContent = data.author;
            testiDate.textContent = data.date;
            
            // Update dots
            const dots = dotsContainer.querySelectorAll('.dot');
            dots.forEach(d => d.classList.remove('active'));
            if(dots[index]) dots[index].classList.add('active');

            // Fade in
            if(contentInner) contentInner.style.opacity = '1';
        }, 200);
    }

    if (testiQuote && prevBtn && nextBtn && dotsContainer) {
        // Init Dots
        dotsContainer.innerHTML = '';
        testimonials.forEach((_, index) => {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => {
                currentTestimonialIndex = index;
                updateTestimonial(currentTestimonialIndex);
            });
            dotsContainer.appendChild(dot);
        });

        // Navigation
        prevBtn.addEventListener('click', () => {
            currentTestimonialIndex--;
            if (currentTestimonialIndex < 0) currentTestimonialIndex = testimonials.length - 1;
            updateTestimonial(currentTestimonialIndex);
        });

        nextBtn.addEventListener('click', () => {
            currentTestimonialIndex++;
            if (currentTestimonialIndex >= testimonials.length) currentTestimonialIndex = 0;
            updateTestimonial(currentTestimonialIndex);
        });
        
        // Auto Play
        setInterval(() => {
             currentTestimonialIndex++;
             if (currentTestimonialIndex >= testimonials.length) currentTestimonialIndex = 0;
             updateTestimonial(currentTestimonialIndex);
        }, 5000); // 5 seconds
    }


    // --- Tracking Steps Logic ---
    const stepItems = document.querySelectorAll('.step-item');
    // We can simulate step progression or clicking
    if (stepItems.length > 0) {
        stepItems.forEach((item) => {
            item.addEventListener('click', function() {
                // If on desktop where they are list items
                stepItems.forEach(s => s.classList.remove('active'));
                this.classList.add('active');
            });
        });
    }
});
