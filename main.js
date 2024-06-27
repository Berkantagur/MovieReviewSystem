let left_btn = document.getElementById('left_arrow');
let right_btn = document.getElementById('right_arrow');
let cards = document.getElementsByClassName('cards')[0];
let search = document.getElementsByClassName('search')[0];
let search_input = document.getElementById('search-input');

left_btn.addEventListener('click', () => {
    cards.scrollLeft -= 140;
});

right_btn.addEventListener('click', () => {
    cards.scrollLeft += 140;
});

let json_url = "movie.json";

fetch(json_url).then(response => {
    return response.json();})
    
    .then((data) => {
        data.forEach((movie,i) => {
            let {name, date, genre, imdb, url, small_cover, large_cover} = movie;
            let card = document.createElement('a');
            card.classList.add('card');
            card.href = url;
            card.innerHTML = `
            <img src="${small_cover}" alt="${name}" class="poster">
            <div class="rstcard">
                <img src="${large_cover}" alt="">
                <div class="content">
                    <h4>${name}</h4>
                    <div class="sub">
                        <p>${genre}, ${date}</p>
                        <h3><span>IMDb</span><i class="bi bi-star-fill"></i> ${imdb}</h3>
                    </div>
                </div>
            </div>
            `
            cards.appendChild(card);
        });

        document.getElementById('title').innerText = data[0].name;
        document.getElementById('detail').innerText = data[0].description;
        document.getElementById('genre_').innerText = data[0].genre;
        document.getElementById('date_').innerText = data[0].date;
        document.getElementById('rate').innerHTML = `<span>IMDb</span><i class="bi bi-star-fill"></i> ${data[0].imdb}`;
    
        // Search Data Load
        data.forEach(element => {
            let {name, date, genre, imdb, url, small_cover} = element;
            let card = document.createElement('a');
            card.classList.add('card');
            card.href = url;
            card.innerHTML = `
            <img src="${small_cover}" alt="">
                        <div class="content">
                            <h3>${name} </h3>
                            <p>${genre}, ${date} , <span>IMDb</span><i class="bi bi-star-fill"></i> ${imdb}</p>
                        </div>
            `
            search.appendChild(card);
        });

        // Search Functionality

        search_input.addEventListener('input', () => {
            let filter = search_input.value.toUpperCase();
            let a = search.getElementsByTagName('a');

            for (let i = 0; i < a.length; i++) {
                let b = a[i].getElementsByClassName('content')[0];
                let txtValue = b.textContent || b.innerText;
                
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "flex";
                    search.style.visibility = "visible";
                    search.style.opacity = "1";
                } else {
                    a[i].style.display = "none";
                }

                if (search_input.value === "") {
                    search.style.visibility = "hidden";
                    search.style.opacity = "0";
                }
            }   
        })

        let series = document.getElementById('series');
        series.addEventListener('click', () => {
            cards.innerHTML = "";

            let series_data = data.filter((element) => {
                return element.type === "series";
            });

            series_data.forEach((element) => {
                let {name, date, genre, imdb, url, small_cover, large_cover} = element;
                let card = document.createElement('a');
                card.classList.add('card');
                card.href = url;
                card.innerHTML = `
                <img src="${small_cover}" alt="${name}" class="poster">
                <div class="rstcard">
                    <img src="${large_cover}" alt="">
                    <div class="content">
                        <h4>${name}</h4>
                        <div class="sub">
                            <p>${genre}, ${date}</p>
                            <h3><span>IMDb</span><i class="bi bi-star-fill"></i> ${imdb}</h3>
                        </div>
                    </div>
                </div>
                `
                cards.appendChild(card);
            });
        });

        let movies = document.getElementById('movies');
        movies.addEventListener('click', () => {
            cards.innerHTML = "";

            let movies_data = data.filter((element) => {
                return element.type === "movies";
            });

            movies_data.forEach((element) => {
                let {name, date, genre, imdb, url, small_cover, large_cover} = element;
                let card = document.createElement('a');
                card.classList.add('card');
                card.href = url;
                card.innerHTML = `
                <img src="${small_cover}" alt="${name}" class="poster">
                <div class="rstcard">
                    <img src="${large_cover}" alt="">
                    <div class="content">
                        <h4>${name}</h4>
                        <div class="sub">
                            <p>${genre}, ${date}</p>
                            <h3><span>IMDb</span><i class="bi bi-star-fill"></i> ${imdb}</h3>
                        </div>
                    </div>
                </div>
                `
                cards.appendChild(card);
            });
        });

        let kids = document.getElementById('kids');
        kids.addEventListener('click', () => {
            cards.innerHTML = "";

            let kids_data = data.filter((element) => {
                return element.type === "kids";
            });

            kids_data.forEach((element, i) => {
                let {name, date, genre, imdb, url, small_cover, large_cover} = element;
                let card = document.createElement('a');
                card.classList.add('card');
                card.href = url;
                card.innerHTML = `
                <img src="${small_cover}" alt="${name}" class="poster">
                <div class="rstcard">
                    <img src="${large_cover}" alt="">
                    <div class="content">
                        <h4>${name}</h4>
                        <div class="sub">
                            <p>${genre}, ${date}</p>
                            <h3><span>IMDb</span><i class="bi bi-star-fill"></i> ${imdb}</h3>
                        </div>
                    </div>
                </div>
                `
                cards.appendChild(card);
            });
        });

    });

