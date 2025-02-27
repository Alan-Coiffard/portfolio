<?php

class arrowUp
{

    public function arrowUp($link)
    {
?>
        <div class="hovicon-up effect-1 sub-a">
            <i id="up" onclick="scrollUp()" class="fa fa-angle-up"></i>
        </div>
        <script>
            function scrollUp(params) {
                window.scrollTo({ top: 0, behavior: 'smooth' });
                
            }

            document.addEventListener('DOMContentLoaded', function() {
                var scrollPosition = window.scrollY;
                var stickyBtn = document.querySelector('.hovicon-up');
                window.addEventListener('scroll', function() {

                    scrollPosition = window.scrollY;

                    if (scrollPosition >= 30) {
                        stickyBtn.classList.add('sticky');
                    } else {
                        stickyBtn.classList.remove('sticky');
                    }
                });

            });
        </script>
<?php
    }
}
