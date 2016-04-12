<section id="blog" class="fadeContent">
    <div class="container-fluid">
        <% loop $Children %>
            <div class="entry">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <% if $Video %>
                            <article class="inner-content blog-video full-half">
                                <video loop muted autoplay poster="$VideoCover.URL" class="fullscreen-bg__video">
                                    <source src="$Video.URL" type="video/mp4">
                                </video>
                            </article>
                        <% else %>
                            <article class="inner-content blog-image full-half" style="background: url('$Photo1.URL') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;background-size: cover;">
                            </article>
                        <% end_if %>
                    </div>
                    
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <article class="inner-content blog-content half-half">
                            <div class="t-wrap">
                                <div class="t-content">
                                    <h1 class="title"><strong>$Title</strong></h1>
                                    <% if $Teaser %>
                                        <p>$Teaser</p>
                                    <% else %>
                                        <p>$Content.FirstSentence</p>
                                    <% end_if %>
                                </div>
                            </div>
                        </article>
                        
                        <article class="inner-content blog-gallery half-half" style="background: url('$Photo2.URL') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                            <div class="t-wrap read-more">
                                <div class="t-content">
                                    <a href="$Link" class="more">MORE</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <div style="height:30px"></div>

        <% end_loop %>
    </div>
</section>