<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="footer-heading mb-4">About Us</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <h2 class="footer-heading mb-4">Features</h2>
                        {!! ChuckMenu::renderFrontEnd('chuckcms-template-colorlib-ideal', 'menu-unstyled', 'ideal-footer') !!} 
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 ml-auto">
                <div class="mb-5">
                    <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
                    
                    <form action="#" method="post" class="footer-suscribe-form">
                    
                    <div class="input-group mb-3">
                        <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                        </div>
                    </div>
                </div>

                <h2 class="footer-heading mb-4">Follow Us</h2>
                @if(ChuckSite::getSetting('socialmedia.facebook') !== null)
                <a href="{{ ChuckSite::getSetting('socialmedia.facebook') }}" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                @endif
                @if(ChuckSite::getSetting('socialmedia.twitter') !== null)
                <a href="{{ ChuckSite::getSetting('socialmedia.twitter') }}" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                @endif
                @if(ChuckSite::getSetting('socialmedia.instagram') !== null)
                <a href="{{ ChuckSite::getSetting('socialmedia.instagram') }}" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                @endif
                @if(ChuckSite::getSetting('socialmedia.linkedin') !== null)
                <a href="{{ ChuckSite::getSetting('socialmedia.linkedin') }}" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                @endif
                </form>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>