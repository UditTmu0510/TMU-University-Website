<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Stories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        xintegrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Custom Styles for Web Stories */
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000000;
            /* Changed to black as requested */
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
            background-color: #000;
            /* Viewer background is also black */
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.1);
            /* Adjusted shadow for black background */
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
            z-index: 1;
            /* Slides are behind header and nav arrows */
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
            background-color: rgba(0, 0, 0, 0.5);
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
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.9) 75%, rgba(0, 0, 0, 0.1) 100%);
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
            margin-top: 2rem;
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
            background-color: rgba(0, 0, 0, 0.4);
            /* Semi-transparent background */
            color: white;
            border: none;
            border-radius: 50%;
            /* Circular buttons */
            width: 40px;
            height: 40px;
            font-size: 20px;
            cursor: pointer;
            z-index: 15;
            /* Above slides, potentially above header if not careful with positioning */
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

    <script>
        const storiesData = [{
            id: 'story{{ $story->id }}',
            slides: [
                @foreach ($story->slides as $slide)
                    {
                        imageUrl: '{{ $slide->image_url }}',
                        title: {!! json_encode($slide->title) !!},
                        description: {!! json_encode($slide->description) !!},
                        duration: {{ $slide->duration }}
                    },
                @endforeach
            ]
        }];
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const storiesData = [{
            id: 'story{{ $story->id }}',
            slides: [
                @foreach ($story->slides as $slide)
                    {
                        imageUrl: '{{ $slide->image_url }}',
                        title: {!! json_encode($slide->title) !!},
                        description: {!! json_encode($slide->description) !!},
                        duration: {{ $slide->duration }}
                    },
                @endforeach
            ]
        }];
    </script>

    <script>
        // === Web Story Logic (identical JS functionality adapted to Laravel) ===
        document.addEventListener('DOMContentLoaded', function() {
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

                viewer.innerHTML = '';
                const storyContainer = document.createElement('div');
                storyContainer.style.width = '100%';
                storyContainer.style.height = '100%';
                storyContainer.style.position = 'relative';

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
                <div class="publisher-logo px-5"></div>
                <div class="action-buttons">
                    <button id="pausePlayBtn"><i class="fas fa-pause"></i></button>
                    <button id="shareBtn"><i class="fas fa-paper-plane"></i></button>
                </div>
            `;
                headerDiv.appendChild(progressBarsContainer);
                headerDiv.appendChild(controlsDiv);
                storyContainer.appendChild(headerDiv);

                story.slides.forEach((slideData, index) => {
                    const slideElement = document.createElement('div');
                    slideElement.className = 'webstory-slide';
                    slideElement.id = `slide-${story.id}-${index}`;
                    slideElement.style.backgroundImage = `url('${slideData.imageUrl}')`;

                    const contentDiv = document.createElement('div');
                    contentDiv.className = 'webstory-content';
                    contentDiv.innerHTML = `<h2>${slideData.title}</h2><p>${slideData.description}</p>`;
                    slideElement.appendChild(contentDiv);
                    storyContainer.appendChild(slideElement);
                });

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

                viewer.appendChild(storyContainer);

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

                story.slides.forEach((_, i) => {
                    const slideElem = document.getElementById(`slide-${story.id}-${i}`);
                    if (slideElem) slideElem.classList.remove('active');
                    const fill = document.getElementById(`progress-fill-${i}`);
                    if (i < slideIndex) fill && (fill.style.width = '100%');
                    else if (i > slideIndex) fill && (fill.style.width = '0%');
                });

                const currentSlideElement = document.getElementById(`slide-${story.id}-${slideIndex}`);
                if (currentSlideElement) currentSlideElement.classList.add('active');

                const currentSlideData = story.slides[slideIndex];
                const progressFill = document.getElementById(`progress-fill-${slideIndex}`);
                progressFill && (progressFill.style.width = '0%');

                clearInterval(storyInterval);
                clearInterval(progressInterval);

                if (!isPaused) {
                    slideStartTime = Date.now();
                    const duration = currentSlideData.duration;

                    progressInterval = setInterval(() => {
                        if (isPaused) return;
                        const elapsedTime = Date.now() - slideStartTime;
                        const progress = (elapsedTime / duration) * 100;
                        progressFill && (progressFill.style.width = `${Math.min(progress, 100)}%`);
                    }, 100);

                    storyInterval = setTimeout(() => {
                        progressFill && (progressFill.style.width = '100%');
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
                        if (currentStoryIndex + 1 < storiesData.length) {
                            // Move to next story if available
                            currentStoryIndex++;
                            loadStory(currentStoryIndex);
                            return;
                        } else {
                            // No more stories, redirect to listing page
                            window.location.href = "{{ route('visual.stories') }}";
                            return;
                        }
                    }
                } else if (direction === 'prev') {
                    nextSlideIndex--;
                    if (nextSlideIndex < 0) {
                        if (currentStoryIndex > 0) {
                            currentStoryIndex--;
                            const prevStory = storiesData[currentStoryIndex];
                            currentSlideIndex = prevStory.slides.length - 1;
                            loadStory(currentStoryIndex);
                            return;
                        } else {
                            const fill = document.getElementById(`progress-fill-${currentSlideIndex}`);
                            fill && (fill.style.width = '0%');
                            isPaused = false;
                            showSlide(currentSlideIndex);
                            return;
                        }
                    }
                }

                currentSlideIndex = nextSlideIndex;
                showSlide(currentSlideIndex);
            }

            function togglePausePlay() {
                isPaused = !isPaused;
                updatePausePlayButton();

                const story = storiesData[currentStoryIndex];
                const currentSlideData = story.slides[currentSlideIndex];
                const progressFill = document.getElementById(`progress-fill-${currentSlideIndex}`);

                if (isPaused) {
                    clearInterval(storyInterval);
                    clearInterval(progressInterval);
                } else {
                    const currentProgressWidth = parseFloat(progressFill?.style.width || 0);
                    const alreadyElapsed = currentSlideData.duration * (currentProgressWidth / 100);
                    slideStartTime = Date.now() - alreadyElapsed;

                    progressInterval = setInterval(() => {
                        if (isPaused) return;
                        const elapsedTime = Date.now() - slideStartTime;
                        const progress = (elapsedTime / currentSlideData.duration) * 100;
                        progressFill && (progressFill.style.width = `${Math.min(progress, 100)}%`);
                    }, 100);

                    storyInterval = setTimeout(() => {
                        progressFill && (progressFill.style.width = '100%');
                        clearInterval(progressInterval);
                        navigateSlide('next');
                    }, currentSlideData.duration - alreadyElapsed);
                }
            }

            function updatePausePlayButton() {
                const btn = document.getElementById('pausePlayBtn');
                btn.innerHTML = isPaused ? '<i class="fas fa-play"></i>' : '<i class="fas fa-pause"></i>';
            }

            function shareStory() {
                const story = storiesData[currentStoryIndex];
                const dummyLink = `{{ url('visual-story/' . $story->id) }}#slide=${currentSlideIndex + 1}`;

                if (navigator.clipboard) {
                    navigator.clipboard.writeText(dummyLink)
                        .then(() => showMessage("Link copied to clipboard!"))
                        .catch(() => fallbackCopyTextToClipboard(dummyLink));
                } else {
                    fallbackCopyTextToClipboard(dummyLink);
                }
            }

            function fallbackCopyTextToClipboard(text) {
                const textArea = document.createElement("textarea");
                textArea.value = text;
                textArea.style.position = "fixed";
                textArea.style.top = "-9999px";
                document.body.appendChild(textArea);
                textArea.focus();
                textArea.select();

                try {
                    const successful = document.execCommand('copy');
                    showMessage(successful ? "Link copied to clipboard!" : "Failed to copy link.");
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

            initStoryViewer();
        });
    </script>


</body>

</html>
