
document.addEventListener("DOMContentLoaded", function() {
    const roomData = [
        {
            imgSrc: "image/room1.jpeg",
            title: "Double Room",
            description: "The Double Room at Royal Hotel offers a comfortable ambiance with a double bed, sturdy furniture, and a perfect bathroom for a pleasant and relaxing stay.",
            services: ["wifi", "video", "bath", "cloud-showers-heavy"],
            price: "$100 /night",
            link: "booking.php?room=Double Room"
        },
        {
            imgSrc: "image/room2.jpeg",
            title: "Triple Room",
            description: "The Triple Room at Royal Hotel offers a spacious and comfortable ambiance with three suitable beds for a family or group of friends, providing a pleasant experience for everyone.",
            services: ["wifi", "video", "bath", "cloud-showers-heavy"],
            price: "$150 /night",
            link: "booking.php?room=Triple Room"
        },
        {
            imgSrc: "image/room3.jpeg",
            title: "Quadruple Room",
            description: "The Quadruple Room at Royal Hotel offers a suitable ambiance for a large group, providing comfortable accommodations for four people with appropriate beds and a large bathroom.",
            services: ["wifi", "video", "bath", "cloud-showers-heavy"],
            price: "$200 /night",
            link: "booking.php?room=Quadruple Room"
        },
        {
            imgSrc: "image/room4.jpeg",
            title: "Family Room",
            description: "The Family Room at Royal Hotel offers a suitable ambiance for the whole family, providing play areas for children and a large room to relax in.",   
            services: ["wifi", "video", "bath", "cloud-showers-heavy"],    
            price: "$180 /night",
            link: "booking.php?room=Family Room"
        },
        {
            imgSrc: "image/room5.jpeg",
            title: "Double Room",
            description: "The Double Room at Royal Hotel offers a comfortable ambiance with a double bed, sturdy furniture, and a perfect bathroom for a pleasant and relaxing stay.",   
            services: ["wifi", "video", "bath", "cloud-showers-heavy"],    
            price: "$100 /night",
            link: "booking.php?room=Double Room"
        },
        {
            imgSrc: "image/room6.jpeg",
            title: "Triple Room",
            description: "The Triple Room at Royal Hotel offers a spacious and comfortable ambiance with three suitable beds for a family or group of friends, providing a pleasant experience for everyone.", 
            services: ["wifi", "video", "bath", "cloud-showers-heavy"],      
            price: "$150 /night",
            link: "booking.php?room=Triple Room"
        },
        {
            imgSrc: "image/room7.jpeg",
            title: "Quadruple Room",
            description: "The Quadruple Room at Royal Hotel offers a suitable ambiance for a large group, providing comfortable accommodations for four people with appropriate beds and a large bathroom.",   
            services: ["wifi", "video", "bath", "cloud-showers-heavy"],    
            price: "$200 /night",
            link: "booking.php?room=Quadruple Room"
        },
        {
            imgSrc: "image/room8.jpeg",
            title: "Family Room",
            description: "The Family Room at Royal Hotel offers a suitable ambiance for the whole family, providing play areas for children and a large room to relax in.",    
            services: ["wifi", "video", "bath", "cloud-showers-heavy"],   
            price: "$180 /night",
            link: "booking.php?room=Family Room"
        }, 
        {
            imgSrc: "image/room9.jpeg",
            title: "Double Room",
            description: "The Double Room at Royal Hotel offers a comfortable ambiance with a double bed, sturdy furniture, and a perfect bathroom for a pleasant and relaxing stay.",    
            services: ["wifi", "video", "bath", "cloud-showers-heavy"],   
            price: "$100 /night",
            link: "booking.php?room=Double Room"
        },
        
    ];

    let currentPage = 0;
    const totalPages = Math.ceil(roomData.length / 3);

    function renderRooms(page) {
        const startIndex = page * 3;
        const endIndex = startIndex + 3;
        const roomContainer = document.getElementById('kartat');
        roomContainer.innerHTML = ''; // Clear existing rooms

        roomData.slice(startIndex, endIndex).forEach(room => {
            roomContainer.innerHTML += `
                <div class="item3">
                    <div class="card">
                        <img src="${room.imgSrc}" alt="">
                        <div class="card-body">
                            <h3 class="card-title">${room.title}</h3>
                            <p class="card-text">${room.description}</p>
                            ${room.services.map(service => `<i class="fa-solid fa-${service}"></i>`).join('')}
                            <h5>Starting from: ${room.price}</h5>
                            <button><a href="${room.link}">Book now</a></button>
                        </div>
                    </div>
                </div>
            `;
        });
        updateDots(page);
    }

    function updateDots(page) {
        const dots = document.querySelectorAll('.fa-circle, .fa-circle-dot');
        dots.forEach(dot => dot.classList.replace('fa-circle-dot', 'fa-circle'));
        dots[page].classList.replace('fa-circle', 'fa-circle-dot');
    }

    document.getElementById('spinner').addEventListener('click', function() {
        currentPage = (currentPage + 1) % totalPages; // Update the current page
        renderRooms(currentPage); // Render the rooms for the new page
    });

    renderRooms(0); // Initial render
});