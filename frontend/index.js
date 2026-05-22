import EsemenyTablazat from './esemenyTablazat.js';

export default class DataService {
    constructor(){

    };
   
};

const apiUrl = 'http//localhost:8000/api/esemenyek';

   dataService.get(apiUrl, (data)=> {
    console.log("Sikeres lekérdezés! Az esemenyek adatai:", data);

    const tbody = document.getElementById('esemeny-tbody');
    new EsemenyTablazat(data,tbody);

    
});

getHeaders() {

    let headers = {
         "Content-Type":"application/json",
         "Accept":"application/json"
    }

    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
        if (csrfToken) {
        headers["X-CSRF-TOKEN"] = csrfToken;
    }

    return headers;
}


    


async get(url, callback) {
    try {
        const response = await tech(url, {
            method:'GET',
            headers:this.getHeaders()
        });

        const data = await response.json();
        callback(data);
    }catch (error){
        console.error("Hiba történt a GET kérés során:", error);
    }
};

async post(url, data, callback) {
    try {
        const response = await fetch(url, {
            method:'POST',
            headers:this.getHeaders(),
            body:JSON.stringify(data)
        });
    }catch (error) {
        console.error("Hiba történt a POST kérés során:", error);
    }
}

const kategoriaApiUrl = 'http://localhost:8000/api/kategoria';

dataService.get(kategoriaApiUrl, (kategoriak)=> {
    const selectElement = document.getElementById('kategoria-select');

    if(Array.isArray(kategoriak)) {
        kategoriak.forEach(kategoria => {
            const option = document.createElement('option');
            option.value = kategoria.id;
            option.textContent = kategoria_nev;
            selectElement.appendChild(option);
        });
    }
});

const dataService = new DataService();

const apiUrl = 'http//localhost:8000/api/esemeny';
dataService.get(apiUrl, (data)=> {
    console.log("Sikeres lekérdezés!")
})