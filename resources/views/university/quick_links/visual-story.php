<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Stories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" xintegrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Custom Styles for Web Stories */
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000000; /* Changed to black as requested */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100dvh; 
        }

        .webstory-viewer-container {
            width: 100%;
            max-width: 400px; 
            height: 100dvh; 
            max-height: 800px; 
            background-color: #000; /* Viewer background is also black */
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.1); /* Adjusted shadow for black background */
            overflow: hidden; 
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .webstory-slide {
            width: 100%;
            height: 100%; 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            /* padding: 16px;  */
            color: #fff;
        }

        .webstory-slide.active {
            opacity: 1;
            z-index: 1; /* Slides are behind header and nav arrows */
        }

        .webstory-header {
            position: relative;
            z-index: 10; 
            width: 100%;
            padding-top: 8px;
        }

        .progress-bars-container {
            display: flex;
            gap: 4px;
            width: 100%;
            margin-bottom: 12px;
        }

        .progress-bar-segment {
            flex-grow: 1;
            height: 3px;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 3px;
            overflow: hidden;
        }

        .progress-bar-fill {
            height: 100%;
            width: 0%;
            background-color: #fff;
            border-radius: 3px;
            transition: width 0.1s linear; 
        }

        .story-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .publisher-logo img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #eee;
            object-fit: cover;
        }
         .publisher-logo-text {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
            background-color: rgba(0,0,0,0.5); 
            padding: 4px 8px;
            border-radius: 4px;
        }

        .action-buttons button {
            background: none;
            border: none;
            color: #fff;
            font-size: 1.25rem;
            margin-left: 16px;
            cursor: pointer;
            padding: 8px; 
        }
        .action-buttons button:hover {
            opacity: 0.8;
        }

        .webstory-content {
            position: relative;
            z-index: 5; 
            text-align: left;
            padding: 16px; 
            background: linear-gradient(to top, rgba(0,0,0,0.9) 0%,rgba(0,0,0,0.9) 75%, rgba(0,0,0,0.1) 100%); 
        }

        .webstory-content h2 {
            font-size: 1.75rem; 
            font-weight: bold;
            margin-bottom: 8px;
            line-height: 1.2;
            text-align: center;
        }

        .webstory-content p {
            font-size: 0.95rem; 
            margin-top:2rem;
            line-height: 1.5;
            opacity: 0.9;
            text-align: center;
        }

        /* Removed .navigation-overlay and .nav-area as we are adding visible arrows */

        .message-box {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            z-index: 1000; 
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
        }
        .message-box.show {
            opacity: 1;
        }

        /* Styles for Navigation Arrows */
        .story-nav-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.4); /* Semi-transparent background */
            color: white;
            border: none;
            border-radius: 50%; /* Circular buttons */
            width: 40px;
            height: 40px;
            font-size: 20px;
            cursor: pointer;
            z-index: 15; /* Above slides, potentially above header if not careful with positioning */
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.2s ease;
        }

        .story-nav-arrow:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }

        .story-nav-arrow.prev {
            left: 10px;
        }

        .story-nav-arrow.next {
            right: 10px;
        }

    </style>
</head>
<body>

    <div class="webstory-viewer-container" id="webstoryViewer">
        </div>
    <div id="messageBox" class="message-box">Link copied to clipboard!</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // JavaScript for Web Stories Functionality
        const storiesData = [
            {
                id: 'story1',
                slides: [
                    {
                        imageUrl: 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c3R1ZHlpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60',
                        title: 'Studying at Night-Creativity Boost',
                        description: 'Some people can express higher rates of creativity and analyze problems more effectively at night. This is probably why the brain forms a unique connection when the world is dark. It is an appropriate time to cover creative or analytical subjects.',
                        duration: 7000 // 7 seconds
                    },
                    {
                        imageUrl: 'https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8c3R1ZHlpbmd8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60',
                        title: 'Enhanced Focus in Quiet Hours',
                        description: 'The tranquility of the night often leads to fewer distractions, allowing for deeper concentration and more productive study sessions.',
                        duration: 6000 // 6 seconds
                    },
                    {
                        imageUrl: 'https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHN0dWR5aW5nfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60',
                        title: 'Tips for Night Owls',
                        description: 'Stay hydrated, take short breaks to stretch, and ensure your study space is well-lit to maintain energy and focus.',
                        duration: 8000 // 8 seconds
                    }
                ]
            }
            // Add more stories here if needed
        ];

        const viewer = document.getElementById('webstoryViewer');
        const messageBox = document.getElementById('messageBox');
        let currentStoryIndex = 0;
        let currentSlideIndex = 0;
        let storyInterval;
        let progressInterval;
        let isPaused = false;
        let slideStartTime;

        function initStoryViewer() {
            if (!storiesData || storiesData.length === 0) {
                viewer.innerHTML = '<p class="text-white p-3">No stories available.</p>';
                return;
            }
            loadStory(currentStoryIndex);
        }

        function loadStory(storyIndex) {
            const story = storiesData[storyIndex];
            if (!story) return;

            viewer.innerHTML = ''; // Clear previous story elements

            // Create a container that will hold header, slides, and navigation arrows
            const storyContainer = document.createElement('div');
            storyContainer.style.width = '100%';
            storyContainer.style.height = '100%';
            storyContainer.style.position = 'relative'; // For absolute positioning of slides and arrows

            // Create header structure
            const headerDiv = document.createElement('div');
            headerDiv.className = 'webstory-header';

            const progressBarsContainer = document.createElement('div');
            progressBarsContainer.className = 'progress-bars-container';
            story.slides.forEach((_, i) => {
                const segment = document.createElement('div');
                segment.className = 'progress-bar-segment';
                segment.innerHTML = `<div class="progress-bar-fill" id="progress-fill-${i}"></div>`;
                progressBarsContainer.appendChild(segment);
            });

            const controlsDiv = document.createElement('div');
            controlsDiv.className = 'story-controls pe-4';
            controlsDiv.innerHTML = `
                <div class="publisher-logo px-5">
                </div>
                <div class="action-buttons">
                    <button id="pausePlayBtn"><i class="fas fa-pause"></i></button>
                    <button id="shareBtn"><i class="fas fa-paper-plane"></i></button>
                </div>
            `;
            headerDiv.appendChild(progressBarsContainer);
            headerDiv.appendChild(controlsDiv);
            storyContainer.appendChild(headerDiv); // Add header to the story container

            // Create slides
            story.slides.forEach((slideData, index) => {
                const slideElement = document.createElement('div');
                slideElement.className = 'webstory-slide';
                slideElement.id = `slide-${story.id}-${index}`;
                slideElement.style.backgroundImage = `url('${slideData.imageUrl}')`;

                const contentDiv = document.createElement('div');
                contentDiv.className = 'webstory-content';
                contentDiv.innerHTML = `
                    <h2>${slideData.title}</h2>
                    <p>${slideData.description}</p>
                `;
                slideElement.appendChild(contentDiv);
                storyContainer.appendChild(slideElement); // Add slide to the story container
            });
            
            // Add Navigation Arrows
            const prevArrow = document.createElement('button');
            prevArrow.className = 'story-nav-arrow prev';
            prevArrow.innerHTML = '<i class="fas fa-chevron-left"></i>';
            prevArrow.onclick = () => navigateSlide('prev');
            storyContainer.appendChild(prevArrow);

            const nextArrow = document.createElement('button');
            nextArrow.className = 'story-nav-arrow next';
            nextArrow.innerHTML = '<i class="fas fa-chevron-right"></i>';
            nextArrow.onclick = () => navigateSlide('next');
            storyContainer.appendChild(nextArrow);

            viewer.appendChild(storyContainer); // Add the complete story container to the main viewer

            // Attach event listeners for header buttons
            document.getElementById('pausePlayBtn').onclick = togglePausePlay;
            document.getElementById('shareBtn').onclick = shareStory;

            currentSlideIndex = 0;
            isPaused = false;
            updatePausePlayButton();
            showSlide(currentSlideIndex);
        }

        function showSlide(slideIndex) {
            const story = storiesData[currentStoryIndex];
            if (!story || !story.slides[slideIndex]) return;

            // Hide all slides for the current story
            story.slides.forEach((_, i) => {
                const slideElem = document.getElementById(`slide-${story.id}-${i}`);
                if (slideElem) slideElem.classList.remove('active');
                // Reset progress for previous slides in the same story
                if (i < slideIndex) {
                    const fill = document.getElementById(`progress-fill-${i}`);
                    if(fill) fill.style.width = '100%';
                } else if (i > slideIndex) { // Reset progress for future slides
                     const fill = document.getElementById(`progress-fill-${i}`);
                    if(fill) fill.style.width = '0%';
                }
            });

            // Show the current slide
            const currentSlideElement = document.getElementById(`slide-${story.id}-${slideIndex}`);
            if (currentSlideElement) {
                 currentSlideElement.classList.add('active');
            }

            // Start progress for the current slide
            const currentSlideData = story.slides[slideIndex];
            const progressFill = document.getElementById(`progress-fill-${slideIndex}`);
            if(progressFill) progressFill.style.width = '0%'; // Reset before starting

            clearInterval(storyInterval);
            clearInterval(progressInterval);

            if (!isPaused) {
                slideStartTime = Date.now();
                const duration = currentSlideData.duration;

                progressInterval = setInterval(() => {
                    if (isPaused) return;
                    const elapsedTime = Date.now() - slideStartTime;
                    let progress = (elapsedTime / duration) * 100;
                    if(progressFill) progressFill.style.width = `${Math.min(progress, 100)}%`;
                }, 100); // Update progress bar frequently

                storyInterval = setTimeout(() => {
                    if(progressFill) progressFill.style.width = '100%'; // Ensure it completes
                    clearInterval(progressInterval);
                    navigateSlide('next');
                }, duration);
            }
        }

        function navigateSlide(direction) {
            const story = storiesData[currentStoryIndex];
            if (!story) return;

            let nextSlideIndex = currentSlideIndex;
            if (direction === 'next') {
                nextSlideIndex++;
                if (nextSlideIndex >= story.slides.length) {
                    // End of current story, move to next story or loop/close
                    currentStoryIndex = (currentStoryIndex + 1) % storiesData.length; // Loop stories
                    loadStory(currentStoryIndex); // This will reset slide index to 0
                    return;
                }
            } else if (direction === 'prev') {
                nextSlideIndex--;
                if (nextSlideIndex < 0) {
                    // Beginning of current story
                    if (currentStoryIndex > 0) { // If not the first story, go to previous story's last slide
                        currentStoryIndex--;
                        const prevStory = storiesData[currentStoryIndex];
                        currentSlideIndex = prevStory.slides.length -1; 
                        loadStory(currentStoryIndex); // Reload the new story
                        // showSlide will be called by loadStory for the new currentSlideIndex
                        return; // Exit to prevent overriding currentSlideIndex
                    } else {
                         // At the very first slide of the very first story, reset progress of current slide
                        const progressFill = document.getElementById(`progress-fill-${currentSlideIndex}`);
                        if(progressFill) progressFill.style.width = '0%';
                        isPaused = false; // Restart current slide animation if paused
                        showSlide(currentSlideIndex); // Restart current slide
                        return; // Exit to prevent overriding currentSlideIndex
                    }
                }
            }
            currentSlideIndex = nextSlideIndex;
            showSlide(currentSlideIndex);
        }

        function togglePausePlay() {
            isPaused = !isPaused;
            updatePausePlayButton();

            if (isPaused) {
                clearInterval(storyInterval);
                clearInterval(progressInterval);
            } else {
                // Resume
                const story = storiesData[currentStoryIndex];
                const currentSlideData = story.slides[currentSlideIndex];
                const progressFill = document.getElementById(`progress-fill-${currentSlideIndex}`);
                const currentProgressWidth = parseFloat(progressFill.style.width) || 0;
                // Calculate remaining duration based on current progress
                const remainingDuration = currentSlideData.duration * (1 - (currentProgressWidth / 100));
                
                // Adjust slideStartTime to reflect the already elapsed portion for the progress bar calculation
                const alreadyElapsed = currentSlideData.duration * (currentProgressWidth / 100);
                slideStartTime = Date.now() - alreadyElapsed;

                clearInterval(progressInterval); 
                progressInterval = setInterval(() => {
                    if (isPaused) return;
                    const elapsedTime = Date.now() - slideStartTime;
                    let progress = (elapsedTime / currentSlideData.duration) * 100;
                    if(progressFill) progressFill.style.width = `${Math.min(progress, 100)}%`;
                }, 100);

                clearInterval(storyInterval); 
                storyInterval = setTimeout(() => {
                    if(progressFill) progressFill.style.width = '100%';
                    clearInterval(progressInterval);
                    navigateSlide('next');
                }, remainingDuration);
            }
        }

        function updatePausePlayButton() {
            const btn = document.getElementById('pausePlayBtn');
            if (btn) {
                 btn.innerHTML = isPaused ? '<i class="fas fa-play"></i>' : '<i class="fas fa-pause"></i>';
            }
        }

        function shareStory() {
            const story = storiesData[currentStoryIndex];
            const slide = story.slides[currentSlideIndex];
            const dummyLink = `https://example.com/stories/${story.id}#slide=${currentSlideIndex + 1}`;

            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(dummyLink)
                    .then(() => showMessage("Link copied to clipboard!"))
                    .catch(err => {
                        console.warn('Clipboard API failed, falling back to execCommand:', err);
                        fallbackCopyTextToClipboard(dummyLink);
                    });
            } else {
                fallbackCopyTextToClipboard(dummyLink);
            }
        }

        function fallbackCopyTextToClipboard(text) {
            const textArea = document.createElement("textarea");
            textArea.value = text;
            // Prevent visual disruption
            textArea.style.position = "fixed"; 
            textArea.style.top = "-9999px";
            textArea.style.left = "-9999px";
            document.body.appendChild(textArea);
            textArea.focus();
            textArea.select();
            try {
                const successful = document.execCommand('copy');
                if (successful) {
                    showMessage("Link copied to clipboard!");
                } else {
                    showMessage("Failed to copy link.");
                }
            } catch (err) {
                showMessage("Failed to copy link.");
            }
            document.body.removeChild(textArea);
        }

        function showMessage(message) {
            messageBox.textContent = message;
            messageBox.classList.add('show');
            setTimeout(() => {
                messageBox.classList.remove('show');
            }, 3000);
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', initStoryViewer);

    </script>
</body>
</html>
