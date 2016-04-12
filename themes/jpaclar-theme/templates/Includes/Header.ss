        <button id="hamburger">
            <div class="burger"></div>
            <div class="burger"></div>
            <div class="burger"></div>
        </button>
        <header>    
            <div class="container-fluid">
                <ul class="menu">
                <% loop $Menu(1) %>
                    <li><a class="$LinkingMode" href="$Link"/>$MenuTitle</a></li>
                <% end_loop %>
                </ul>

                <ul class="social-icon">
                    <li><a href="http://codepen.io/near93/"><i class="fa fa-codepen"></i></a></li>
                    <li><a href="https://github.com/near93"><i class="fa fa-github"></i></a></li>
                    <li><a href="https://www.instagram.com/hirinaaa/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="http://hirinaaa.tumblr.com/"><i class="fa fa-tumblr"></i></a></li>
                </ul>
            </div>
        </header>