// Function to select the Elements

const selectElement = (element) => document.querySelector(element);

//Open the Menu on Click

selectElement('.open').addEventListener('click', () => {
    selectElement('.nav-list').classList.add('active');
    });


selectElement('.close').addEventListener('click', () => {
        selectElement('.nav-list').classList.remove('active');
        });
 