var people = [
    {
      name: "Adam Sendler",
      date: "August 2021",
      image: "image/person1.jpeg"
    },
    {
      name: "Emily Johnson",
      date: "September 2021",
      image: "image/person2.jpeg"
    },
    {
      name: "John Doe",
      date: "October 2021",
      image: "image/person3.jpeg"
    },
    {
      name: "Jane Smith",
      date: "November 2021",
      image: "image/person4.jpeg"
    },
    {
      name: "Michael Brown",
      date: "December 2021",
      image: "image/person5.jpeg"
    }
    // Add more people data as needed
  ];

// Initial index
var currentIndex = 0;

// Function to update person data
function updatePerson() {
  // Update image source
  document.getElementById("person-img").src = people[currentIndex].image;
  // Update person name
  document.getElementById("person-name").innerText = people[currentIndex].name;
  // Update person date
  document.getElementById("person-date").innerText = people[currentIndex].date;
}

// Function to handle next person
function nextPerson() {
  currentIndex++;
  if (currentIndex >= people.length) {
    currentIndex = 0;
  }
  updatePerson();
}

// Function to handle previous person
function prevPerson() {
  currentIndex--;
  if (currentIndex < 0) {
    currentIndex = people.length - 1;
  }
  updatePerson();
}

// Event listener for next button
document.getElementById("nextButton").addEventListener("click", nextPerson);

// Event listener for previous button
document.getElementById("prevButton").addEventListener("click", prevPerson);

// Initial update
updatePerson();