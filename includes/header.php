<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="Health-One.jpg" alt="Logo" width="50px" height="50px" style="object-fit: cover;"></a>
<br>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup" 
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" aria-current="page" href="index.php" 
                            style="<?php if($page == "home"){echo "color:#bd0808";}?>">Home</a>
                            <a class="nav-link" href="over.php" 
                            style="<?php if($page == "over"){echo "color:#bd0808";}?>">Over ons</a>

                            <a class="nav-link" href="apparatuur.php" 
                            style="<?php if($page == "apparatuur"){echo "color:#bd0808";}?>">Apparatuur</a>
                            <a class="nav-link" href="contact.php" 
                            style="<?php if($page == "contact"){echo "color:#bd0808";}?>">Contact</a>
                        </div>
                    </div>
                </div>
            </nav>