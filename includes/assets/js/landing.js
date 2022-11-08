        window.onload = () => {
            // const story__videoSrc = "http://localhost/madebycan.com/includes/assets/media/videos/story-vid.mp4";
            const story__videoSrc = "includes/assets/media/videos/story-vid.mp4";
            const changeVideo = Document.querySelector('video');
            changeVideo.pause();
            changeVideo.src = story__videoSrc;
            changeVideo.load();
            changeVideo.play();
        
            const icons__0src = "http://localhost/madebycan.com/includes/assets/media/images/landing/icon-0.png";
            const changeImage = Document.getElementById('icons__0');
            changeImage.src = icons__0src;
        
            const icons__1src = "http://localhost/madebycan.com/includes/assets/media/images/landing/icon-1.png";
            changeImage = Document.getElementById('icons__1');
            changeImage.src = icons__1src;
        
            const icons__2src = "http://localhost/madebycan.com/includes/assets/media/images/landing/icon-2.png";
            changeImage = Document.getElementById('icons__2');
            changeImage.src = icons__2src;
        
            const icons__3src = "http://localhost/madebycan.com/includes/assets/media/images/landing/icon-3.png";
            changeImage = Document.getElementById('icons__3');
            changeImage.src = icons__3src;
        
            const contact__imgSrc = "http://localhost/madebycan.com/includes/assets/media/images/landing/contact-img.svg";
            changeImage = Document.getElementById('contact__img');
            changeImage.src = contact__imgSrc;
        
            const formActionSrc = "http://localhost/madebycan.com/includes/config/controllers/general.php";
            changeAction = Document.getElementById('contact__form');
            changeAction.action = formActionSrc;
        };
        
        // const story__videoSrc = "http://localhost/madebycan.com/includes/assets/media/videos/story-vid.mp4";
        // const changeVideo = Document.querySelector('video');
        // changeVideo.pause();
        // changeVideo.src = story__videoSrc;
        // changeVideo.load();
        // changeVideo.play();
    
        // const icons__0src = "http://localhost/madebycan.com/includes/assets/media/images/landing/icon-0.png";
        // const changeImage = Document.getElementById('icons__0');
        // changeImage.src = icons__0src;
    
        // const icons__1src = "http://localhost/madebycan.com/includes/assets/media/images/landing/icon-1.png";
        // changeImage = Document.getElementById('icons__1');
        // changeImage.src = icons__1src;
    
        // const icons__2src = "http://localhost/madebycan.com/includes/assets/media/images/landing/icon-2.png";
        // changeImage = Document.getElementById('icons__2');
        // changeImage.src = icons__2src;
    
        // const icons__3src = "http://localhost/madebycan.com/includes/assets/media/images/landing/icon-3.png";
        // changeImage = Document.getElementById('icons__3');
        // changeImage.src = icons__3src;
    
        // const contact__imgSrc = "http://localhost/madebycan.com/includes/assets/media/images/landing/contact-img.svg";
        // changeImage = Document.getElementById('contact__img');
        // changeImage.src = contact__imgSrc;
    
        // const formActionSrc = "http://localhost/madebycan.com/includes/config/controllers/general.php";
        // changeAction = Document.getElementById('contact__form');
        // changeAction.action = formActionSrc;
