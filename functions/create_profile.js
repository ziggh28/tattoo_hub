document.addEventListener('DOMContentLoaded', () => {
    const profilePic = document.getElementById('profile-pic');
    const picUpload = document.getElementById('pic-upload');
    const galleryImages = document.getElementById('gallery-images');
    const galleryUpload = document.getElementById('gallery-upload');
    const uploadTattooBtn = document.getElementById('upload-tattoo');
    const socialLinksContainer = document.getElementById('social-links');
    const createProfileBtn = document.querySelector('.create-profile-btn');
    const socialLinkInput = document.getElementById('social-link-input');
    const socialLinkUrlInput = document.getElementById('social-link-url');
    const saveSocialLinkBtn = document.getElementById('save-social-link');
    const cancelSocialLinkBtn = document.getElementById('cancel-social-link');

    let currentEditingSocialLink = null;

    // Create Profile button click event
    createProfileBtn.addEventListener('click', () => {
        alert('Create Profile functionality to be implemented.');
    });

    // Profile picture upload
    profilePic.addEventListener('click', () => {
        picUpload.click();
    });

    picUpload.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                profilePic.src = e.target.result;
                saveToLocalStorage();
            };
            reader.readAsDataURL(file);
        }
    });

    // Gallery picture upload
    uploadTattooBtn.addEventListener('click', () => {
        galleryUpload.click();
    });

    galleryUpload.addEventListener('change', (event) => {
        const files = event.target.files;
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const reader = new FileReader();
            reader.onload = (e) => {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'gallery-image';
                img.addEventListener('click', () => {
                    if (confirm('Do you want to remove this image?')) {
                        img.remove();
                        saveToLocalStorage();
                    }
                });
                galleryImages.appendChild(img);
                saveToLocalStorage();
            };
            reader.readAsDataURL(file);
        }
    });

    // Add social media icons
    const socialPlatforms = [
        { name: 'Facebook', icon: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>' },
        { name: 'Instagram', icon: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>' },
        { name: 'Twitter', icon: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>' },
    ];

    socialPlatforms.forEach(platform => {
        const link = document.createElement('a');
        link.className = 'social-link';
        link.innerHTML = platform.icon;
        link.title = platform.name;
        link.addEventListener('click', (e) => {
            e.preventDefault();
            editSocialLink(link);
        });
        socialLinksContainer.appendChild(link);
    });

    function editSocialLink(link) {
        currentEditingSocialLink = link;
        const rect = link.getBoundingClientRect();
        socialLinkInput.style.display = 'block';
        socialLinkInput.style.top = `${rect.bottom + window.scrollY}px`;
        socialLinkInput.style.left = `${rect.left + window.scrollX}px`;
        
        socialLinkUrlInput.value = link.href || '';
        socialLinkUrlInput.focus();
    }

    saveSocialLinkBtn.addEventListener('click', () => {
        if (currentEditingSocialLink) {
            currentEditingSocialLink.href = 
 socialLinkUrlInput.value;
            currentEditingSocialLink.target = '_blank';
            socialLinkInput.style.display = 'none';
            currentEditingSocialLink = null;
            saveToLocalStorage();
        }
    });

    cancelSocialLinkBtn.addEventListener('click', () => {
        socialLinkInput.style.display = 'none';
        currentEditingSocialLink = null;
    });

    // Save changes
    function saveToLocalStorage() {
        const editableElements = document.querySelectorAll('.editable');
        const savedContent = {};

        editableElements.forEach((el) => {
            savedContent[el.className] = el.innerHTML;
        });

        // Save profile picture
        savedContent['profile-picture'] = profilePic.src;

        // Save gallery images
        const galleryImgs = document.querySelectorAll('.gallery-image');
        savedContent['gallery-images'] = Array.from(galleryImgs).map(img => img.src);

        // Save social links
        const socialLinks = document.querySelectorAll('.social-link');
        savedContent['social-links'] = Array.from(socialLinks).map(link => ({
            platform: link.title,
            url: link.href
        }));

        localStorage.setItem('profileContent', JSON.stringify(savedContent));
    }

    // Load saved changes
    const savedContent = JSON.parse(localStorage.getItem('profileContent'));
    if (savedContent) {
        Object.keys(savedContent).forEach((className) => {
            if (className === 'profile-picture') {
                profilePic.src = savedContent[className];
            } else if (className === 'gallery-images') {
                savedContent[className].forEach(src => {
                    const img = document.createElement('img');
                    img.src = src;
                    img.className = 'gallery-image';
                    img.addEventListener('click', () => {
                        if (confirm('Do you want to remove this image?')) {
                            img.remove();
                            saveToLocalStorage();
                        }
                    });
                    galleryImages.appendChild(img);
                });
            } else if (className === 'social-links') {
                savedContent[className].forEach(linkData => {
                    const link = document.querySelector(`.social-link[title="${linkData.platform}"]`);
                    if (link) {
                        link.href = linkData.url;
                        link.target = '_blank';
                    }
                });
            } else {
                const el = document.querySelector(`.${className}`);
                if (el) {
                    el.innerHTML = savedContent[className];
                }
            }
        });
    }

    // Save on edit
    document.addEventListener('input', (e) => {
        if (e.target.classList.contains('editable')) {
            saveToLocalStorage();
        }
    
    });
});