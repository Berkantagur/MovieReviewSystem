<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="">
    <title>Dark | SERIES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <video src="" autoplay muted loop></video>
        <nav>
            <div class="logo-main">
                <img src="Images/MovieRiders-Logo.png" alt="">
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#" id="series">Series</a>
                    </li>
                    <li>
                        <a href="#" id="movies">Movies</a>
                    </li>
                    <li>
                        <a href="#" id="kids">Kids</a>
                    </li>
                </ul>
            </div>
            <div class="search-user">
                <input type="text" placeholder="Search..." id="search-input">
                <img src="Images/UserPP.jpg" alt="">
                <div class="search">
                    <!--
                    <a href="#" class="card">
                        <img src="Images/Dune-Search-PP.jpg" alt="">
                        <div class="content">
                            <h3>Dune: It Begins </h3>
                            <p>Sci-Fiction, 2021 , <span>IMDb</span><i class="bi bi-star-fill"></i> 8.0</p>
                        </div>
                    </a>
                    -->
                </div>
            </div>
        </nav>
        <div class="contents">
            <h1 id="title"></h1>
            <p id="detail"></p>
            <div class="details">
                <h5 id="genre_"></h5>
                <h4 id="date_"></h4>
                <h3 id="rate"><span></span><i class="bi bi-star-fill"></i></h3>
            </div>
            <div class="buttons">
                <a href="#" id="more">More Info <i class="bi bi-book"></i></a>
                <a href="comments.php?movie_id=8" id="more">Add Comment <i class="bi bi-chat-dots"></i></a>
            </div>
        </div>
        <section>
            <h4>Popular</h4>
            <i class="bi bi-arrow-left-circle" id="left_arrow"></i>
            <i class="bi bi-arrow-right-circle" id="right_arrow"></i>
            <div class="cards">
                <!--<a href="#" class="card">
                    <img src="Images/Dune-Search-PP.jpg" alt="" class="poster">
                    <div class="rstcard">
                        <img src="Images/Dune-Slider1.png" alt="">
                        <div class="content">
                            <h4>Dune: It Begins </h4>
                            <div class="sub">
                                <p>Sci-Fiction, 2021 </p>
                                <h3><span>IMDb</span><i class="bi bi-star-fill"></i> 8.0</h3>
                            </div>
                        </div>
                    </div>
                </a> -->
            </div>
        </section>
    </header>

    <main>
        <section class="info" id="target">
            <img src="" alt="Dark" width="320px" height="400px" id="post">
            <div class="info-contents">
                <h1>Dark</h1>
                <p>Dark is a German science fiction thriller television series co-created by Baran bo Odar and Jantje Friese. It ran for three seasons from 2017 to 2020. The story follows characters from the fictional town of Winden, Germany, as they pursue the truth in the aftermath of a child's disappearance. They follow connections between four estranged families to unravel a sinister time travel conspiracy that spans several generations. The series explores the existential implications of time and its effect on human nature and life. It features an ensemble cast.</p>
                <p>Dark debuted on 1 December 2017 on Netflix; it is the service's first German-language original series. The second season was released on 21 June 2019, while the third and final season was released on 27 June 2020. Dark was praised for its cast, direction, writing, tone, visuals, musical score, and the ambition and complexity of its narrative. In 2021, the BBC ranked the series as the 58th greatest TV series of the 21st century. </p>
                <p>Children start vanishing from the German town of Winden, bringing to light the fractured relationships, double lives, and the dark pasts of four families living there, and unfurling a mystery that spans four generations. The first season begins in 2019, but later grows to include 1986 and 1953 via time travel...</p>
                <div class="details">
                    <h5>Crime, Drama, Mystery</h5>
                    <h4>2017</h4>
                    <h3><span>IMDb</span><i class="bi bi-star-fill"></i> 8.7</h3>
                </div>
            </div>
        </section>
        <section class="comments">
            <h3>COMMENTS</h3>
            <div class="comments-lists">
                <?php 
                include "db_demo_connection.php";
                $movie_id = 8; // Dark movie ID

                $sql = "SELECT * FROM comments WHERE movie_id='$movie_id'";
                $result = $connection->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="comment">';
                        echo '<img src="Images/UserPP.jpg" alt="">';
                        echo '<div class="comment-content">';
                        echo '<h4>' . $row['username'] . '</h4>';
                        echo '<p>' . $row['content'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    // echo '<p>No comments yet.</p>';
                }

                $connection->close();
                ?>
                <div class="comment">
                    <img src="Images/UserPP1.jpg" alt="">
                    <div class="comment-content">
                        <h4>John Doe</h4>
                        <p>It's a great series! Geralt's character is perfectly reflected. Especially the battle scenes and visual effects are very impressive.</p>
                    </div>
                </div>
                <div class="comment">
                    <img src="Images/UserPP2.jpeg" alt="">
                    <div class="comment-content">
                        <h4>Paul Anderson</h4>
                        <p>The series has done a great job staying faithful to the game and book series. Atmosphere and character development are very good.</p>
                    </div>
                </div>
                <div class="comment">
                    <img src="Images/UserPP3.jpg" alt="">
                    <div class="comment-content">
                        <h4>Mery Brown</h4>
                        <p>While watching the series, I felt as if I was re-reading the book. The characters and storytelling are very successful. Excitement is at its peak in every episode.</p>
                    </div>
                </div>    
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-main">
            <div class="footer-logo">
                <img src="Images/MovieRiders-Logo.png" alt="">
                <p>Welcome to MovieRiders! At MovieRiders, we bring you the best of movies and series from around the world, covering diverse genres such as action, drama, comedy, fantasy, horror, sci-fi, and romance. We also have a special Kids section with safe and entertaining content. Each title comes with detailed information including synopsis, genre, release date, IMDb rating. Our platform features user reviews and ratings, allowing you to read and write reviews for all the movies and series. Join our vibrant community, create your profile, add favorites to your watchlist, and engage with fellow movie enthusiasts. Start your adventure today and discover your next favorite movie or series on MovieRiders!</p>
            </div>
            <div class="footer-social">
                <h4>Follow Us</h4>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook" style="color: #2e2eff;"></i></a>
                    </li>
                    <li>
                        <a href="https://www.x.com/" target="_blank"><i class="bi bi-twitter-x" style="color: slategrey;"></i></a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><i class="bi bi-whatsapp" style="color: chartreuse;"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram" style="color: violet;"></i></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/" target="_blank"><i class="bi bi-youtube" style="color: crimson;"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 MovieRiders. All Rights Reserved.</p>
        </div>
    </footer>
    <div class="footer-space"></div>
    
    <script src="main.js"></script>    
    <script>
        fetch(json_url).then((Response) => Response.json())
            .then(data => {
                let series_data = data.filter((element) => {
                return element.name === "Dark";
            });
            
            document.getElementsByTagName('video')[0].src = series_data[0].trailers;
            document.getElementById('post').src = series_data[0].small_cover;
            document.getElementById('title').innerText = series_data[0].name;
            document.getElementById('detail').innerText = series_data[0].description;
            document.getElementById('genre_').innerText = series_data[0].genre;
            document.getElementById('date_').innerText = series_data[0].date;
            document.getElementById('rate').innerHTML = `<span>IMDb</span><i class="bi bi-star-fill"></i> ${series_data[0].imdb}`;
 
        })
    </script>

    <script>
        document.getElementById('more').addEventListener('click', function() {
        document.getElementById('target').scrollIntoView({ behavior: 'smooth' });
        });
    </script>

</body>
</html>