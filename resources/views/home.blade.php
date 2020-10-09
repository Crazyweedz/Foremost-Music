@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Home Background -->
    <div class="ashade-home-background ashade-page-background is-video">
        <video src="{{ asset('video/home-bg.mp4') }}" poster="{{ asset('img/bgs/bg-home01.png') }}" muted autoplay loop></video>
    </div>

    <!-- Home Links and Titles -->
    <div class="ashade-home-link--works ashade-home-link-wrap">
        <div class="ashade-home-link is-link">
            <span>Foremost Music</span>
            <span>à propos</span>
        </div>
    </div><!-- .ashade-home-link-wrap -->
    <div class="ashade-home-link--contacts ashade-home-link-wrap">
        <div class="ashade-home-link is-link">
            <span>Si vous avez plus de questions</span>
            <span><a href="{{ route('contact.index') }}" class="contact-link-home">Contactez-nous</a></span>
        </div>
    </div><!-- .ashade-home-link-wrap -->

    <!-- Home Title and Back Button -->
    <div class="ashade-page-title-wrap is-inactive ">
        <h1 class="ashade-page-title">&nbsp;</h1>
    </div><!-- .ashade-page-title-wrap -->

    <div class="ashade-home-return ashade-back-wrap is-inactive">
        <div class="ashade-back is-home-return">
            <span>Return</span>
            <span>Back</span>
        </div>
    </div><!-- .ashade-to-top-wrap -->

    <!-- Home Contacts Block -->
{{--    <div id="ashade-home-contacts">--}}
{{--        <div class="ashade-row">--}}
{{--            <div class="ashade-col col-4">--}}
{{--                <div class="ashade-contact-details">--}}
{{--                    <h4 class="ashade-contact-details__title">--}}
{{--                        <span>Our Contacts and Socials</span>--}}
{{--                        How to Find Us--}}
{{--                    </h4>--}}
{{--                    <ul class="ashade-contact-details__list">--}}
{{--                        <li>--}}
{{--                            <i class="ashade-contact-icon la la-envelope"></i>--}}
{{--                            <a href="mailto:a.shade@example.com">contact@foremostmusic.fr</a>--}}
{{--                        </li>--}}
{{--                        <li class="ashade-contact-socials">--}}
{{--                            <i class="ashade-contact-icon la la-share-alt"></i>--}}
{{--                            <a href="facebook.com" target="_blank">Fb</a>--}}
{{--                            <a href="twitter.com" target="_blank">Tw</a>--}}
{{--                            <a href="instagram.com" target="_blank">In</a>--}}
{{--                            <a href="500px.com" target="_blank">Px</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div><!-- .ashade-contact-details -->--}}
{{--            </div>--}}
{{--            <div class="ashade-col col-8">--}}
{{--                <form action="mail.php" method="post" class="ashade-contact-form">--}}
{{--                    <div class="ashade-row ashade-small-gap">--}}
{{--                        <div class="ashade-col col-4">--}}
{{--                            <input type="text" id="name" name="name" placeholder="Your Name" required>--}}
{{--                        </div>--}}
{{--                        <div class="ashade-col col-4">--}}
{{--                            <input type="email" id="email" name="email" placeholder="Your Email" required>--}}
{{--                        </div>--}}
{{--                        <div class="ashade-col col-4">--}}
{{--                            <input type="tel" id="phone" name="phone" placeholder="Your Phone" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <textarea name="message" id="message" placeholder="Your Message" required></textarea>--}}
{{--                    <div class="ashade-contact-form__footer">--}}
{{--                        <div class="ashade-contact-form__response"></div>--}}
{{--                        <div class="ashade-contact-form__submit">--}}
{{--                            <input type="submit" value="Send Message">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div><!-- #ashade-home-contacts -->--}}

    <!-- Home Works Block -->
    <div id="ashade-home-works">
        <div class="ashade-row">
            <div class="align-center">
                <h2>
                    <span>Few Words About Myself</span>
                    Nice to Meet You
                </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas cursus ex sit amet nisi euismod elementum in ac nulla. Donec iaculis porttitor orci, a dignissim sem fermentum vel. Ut congue quis est vitae fringilla. Duis gravida eu nisi eu dictum. Praesent elementum posuere augue sagittis sollicitudin. Vivamus ultrices, elit ac lacinia gravida, justo erat scelerisque odio, nec aliquet risus est molestie leo. Curabitur sodales tristique magna, at euismod eros cursus ut. Proin id urna lectus. Vivamus scelerisque vestibulum nisi, ut volutpat magna hendrerit eget. Suspendisse metus lacus, tempus ultrices tincidunt et, dictum sit amet metus. Aenean pulvinar est non ante faucibus auctor. Donec faucibus justo at felis hendrerit mollis. Curabitur posuere leo nec ligula fringilla lacinia. Vestibulum quis libero molestie quam cursus ultricies vitae at lectus.</p>

                <p>Fusce eu aliquet lacus, nec suscipit ipsum. Cras vel lacus euismod, fermentum augue euismod, venenatis urna. Sed elementum tellus eu pellentesque molestie. Maecenas posuere ligula at risus sollicitudin lobortis. Aliquam pharetra ultricies nisl, ut sodales ligula bibendum id. Pellentesque at faucibus justo. Praesent rhoncus erat a enim varius, vitae viverra nunc feugiat. Curabitur dignissim mi sed viverra ultrices. Donec eros ante, faucibus id lorem sed, molestie ultrices sapien. Proin nisl tortor, iaculis egestas consequat venenatis, luctus ac nisi. Etiam mollis enim eget lacus gravida, ac luctus ante hendrerit. Proin non urna dolor. Nunc ante nisi, molestie ut justo nec, sagittis tincidunt ex. Aliquam at libero sagittis ipsum gravida dignissim. In nibh leo, euismod quis aliquam quis, tempus nec felis.</p>
            </div><!-- .ashade-col -->
        </div><!-- .ashade-row -->
    </div><!-- #ashade-home-works -->

@endsection
