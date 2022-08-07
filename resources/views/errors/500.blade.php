<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="UTF-8" />
        <meta name="theme-color" content="#09f" />
        <meta name="description" content="Program Pengenalan Lingkungan Kampus (PPLK) merupakan acara pesta penyambutan terbesar untuk mahasiswa baru yang diselenggarakan setiap tahunnya di Institut Teknologi Sumatera (ITERA). PPLK ITERA hadir sebagai akses utama bagi mahasiswa baru untuk mengawali gerbang perkuliahan, yang berupa kaderisasi awal terpusat yang diselenggarakan oleh Keluarga Mahasiswa Institut Teknologi Sumatera (KM ITERA) untuk menyambut mahasiswa baru." />
        <meta name="keywords" content="PPLK, Program Pengenalan Lingkungan Kampus, PPLK ITERA 2022, KM-ITERA" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="author" content="Fitra Ilyasa" />
        <meta name="copyright" content="PPLK 2022" />
        <meta name="robots" content="follow" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:type" content="cms website" />
        <meta property="og:title" content="CMS Website PPLK 2022" />
        <meta property="og:url" content="URL" />
        <link rel="manifest" href="./manifest.webmanifest" />
        <title>500 Server Error</title>
        <link rel="stylesheet" href="{{ asset('assets/css/error-page.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
</head>

<body class="bg-purple">

    <div class="stars">
        <div class="central-body">
            <img class="image-404" src="{{ asset('assets/500.png') }}" width="450px">
            <a href="#" class="btn-go-home">Kembali!!</a>
        </div>
        <div class="objects" onclick="window.location.href='https://instagram.com/fitrailyasa'" style="cursor: pointer;">
            <svg class="object_rocket" width="40px" height="43" viewBox="0 0 54 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.2148 39.9168C18.8494 39.6885 16.4699 39.2865 17.0191 38.895C18.6508 37.7813 19.8729 36.1638 20.4985 34.2899C21.124 32.416 21.1186 30.3888 20.4831 28.5182C19.8476 26.6476 18.6169 25.0367 16.9792 23.9317C15.3416 22.8267 13.3871 22.2885 11.4147 22.3993C9.77297 22.5025 8.18765 23.0374 6.81902 23.9499C6.26505 24.3392 6.53869 22.9504 6.53886 21.5493C7.56498 19.7457 6.07166 22.0163 7.16809 20.332C8.12732 18.8278 9.38772 17.5385 10.8699 16.5455C12.352 15.5525 14.0238 14.8773 15.7799 14.5624C17.5359 14.2474 19.3381 14.2997 21.073 14.7157C22.8078 15.1318 24.4377 15.9027 25.8599 16.9799C27.2821 18.0571 28.4657 19.4171 29.3362 20.9744C30.2067 22.5317 30.7452 24.2524 30.9178 26.028C31.0904 27.8037 30.8933 29.5959 30.339 31.2917C29.4404 33.963 27.6834 36.2619 25.3417 37.8302C23.8951 38.8609 22.2458 39.5722 20.5034 39.9168C18.7609 40.2614 19.9448 40.3193 18.2148 39.9168Z" fill="#B2E8E8"/>
                <path d="M53.9991 3.19466C53.99 3.03985 53.9392 2.89039 53.852 2.76212C53.7649 2.63385 53.6446 2.53156 53.5041 2.46609C50.3778 1.2104 46.9884 0.751876 43.6409 1.13179C40.2934 1.51171 37.0929 2.71814 34.3275 4.64248C30.4792 7.25788 20.9049 15.1975 12.0406 23.0904C11.4195 23.6472 11.0214 24.4102 10.9201 25.2381C10.8187 26.066 11.021 26.9025 11.4895 27.5926L15.2725 33.141C15.7453 33.8268 16.4504 34.3182 17.2575 34.5242C18.0645 34.7303 18.9189 34.6371 19.6626 34.2619C30.2456 28.9003 41.1463 22.8756 44.976 20.2508C47.776 18.3787 50.0666 15.8397 51.6417 12.8624C53.2168 9.88504 54.0269 6.56282 53.9991 3.19466V3.19466Z" fill="#FFCB39"/>
                <path d="M13.385 30.3668L11.5168 27.5646C11.0484 26.8745 10.8461 26.038 10.9474 25.2101C11.0488 24.3822 11.4469 23.6191 12.0679 23.0624C20.9042 15.1975 30.4785 7.25788 34.3269 4.64248C37.0922 2.71814 40.2927 1.51171 43.6402 1.13179C46.9877 0.751876 50.3771 1.2104 53.5034 2.46609C53.6434 2.53271 53.7629 2.63599 53.849 2.76499V2.76499L13.385 30.3668Z" fill="#FF9600"/>
                <path d="M41.8472 17.1964C41.0048 17.7711 40.0108 18.0831 38.991 18.0928C37.9713 18.1026 36.9715 17.8097 36.1182 17.2512C35.2649 16.6928 34.5964 15.8938 34.1971 14.9554C33.7979 14.017 33.6859 12.9812 33.8754 11.9792C34.0648 10.9771 34.5472 10.0537 35.2614 9.32582C35.9756 8.5979 36.8897 8.09812 37.888 7.88971C38.8863 7.68129 39.924 7.77359 40.8698 8.15494C41.8156 8.53628 42.6271 9.18954 43.2017 10.0321C43.972 11.1618 44.2621 12.5512 44.0081 13.8947C43.7541 15.2383 42.9768 16.4259 41.8472 17.1964V17.1964Z" fill="#7AA5AE"/>
                <path d="M53.5036 2.46612C50.3034 1.16766 46.8223 0.717226 43.397 1.15842L51.5327 13.0865C53.1927 10.0566 54.0421 6.64929 53.9987 3.1947C53.9896 3.03988 53.9388 2.89042 53.8516 2.76215C53.7645 2.63388 53.6442 2.53159 53.5036 2.46612Z" fill="#B2E8E8"/>
                <path d="M53.8586 2.76502C53.7699 2.63472 53.6471 2.53132 53.5036 2.46612C50.3034 1.16766 46.8223 0.717226 43.397 1.15842L47.4602 7.1178L53.8586 2.76502Z" fill="#7AA5AE"/>
                <path d="M41.847 17.1963C42.9765 16.4258 43.7538 15.2382 44.0078 13.8946C44.2618 12.5511 43.9717 11.1617 43.2014 10.032L34.6826 15.8419C35.4531 16.9715 36.6408 17.7487 37.9843 18.0027C39.3278 18.2567 40.7173 17.9667 41.847 17.1963V17.1963Z" fill="#B2E8E8"/>
                <path d="M33.9723 16.3276C33.3077 15.3442 32.9489 14.1862 32.941 12.9992C32.9332 11.8123 33.2766 10.6496 33.9281 9.6575C34.5797 8.66536 35.5101 7.88814 36.6024 7.42367C37.6947 6.9592 38.9 6.82825 40.0665 7.0473C41.233 7.26635 42.3087 7.82561 43.1581 8.65468C44.0075 9.48375 44.5926 10.5456 44.8398 11.7065C45.0871 12.8674 44.9853 14.0755 44.5474 15.1787C44.1095 16.2819 43.3551 17.2309 42.379 17.9062C41.7244 18.3576 40.9869 18.675 40.2091 18.84C39.4312 19.005 38.6284 19.0144 37.8469 18.8676C37.0654 18.7209 36.3207 18.4209 35.6557 17.985C34.9907 17.549 34.4186 16.9857 33.9723 16.3276V16.3276ZM42.4911 10.5177C42.0126 9.81526 41.3365 9.2705 40.5484 8.95233C39.7603 8.63416 38.8955 8.55686 38.0635 8.73023C37.2314 8.90359 36.4695 9.31981 35.874 9.92626C35.2786 10.5327 34.8763 11.3021 34.7182 12.1372C34.5601 12.9723 34.6532 13.8355 34.9857 14.6177C35.3182 15.3998 35.8752 16.0658 36.5863 16.5314C37.2973 16.9969 38.1305 17.2412 38.9804 17.2332C39.8303 17.2252 40.6587 16.9653 41.3608 16.4864C42.2999 15.843 42.946 14.8538 43.1578 13.7353C43.3696 12.6168 43.1299 11.4599 42.4911 10.5177Z" fill="#5C546A"/>
                <path d="M10.6391 36.9521C6.9028 39.4928 0 39.5021 0 39.5021C0 39.5021 2.17639 33.3092 6.25829 30.5257C7.11048 29.9447 8.15855 29.7261 9.17192 29.918C10.1853 30.1098 11.081 30.6963 11.6619 31.5485C12.2428 32.4007 12.4614 33.4488 12.2696 34.4621C12.0778 35.4755 11.4913 36.3712 10.6391 36.9521V36.9521Z" fill="#E87E04"/>
                <path d="M10.9752 35.1305C8.49987 36.8212 3.91357 36.8212 3.91357 36.8212C3.91357 36.8212 5.36139 32.758 8.0702 30.8898C8.63626 30.5033 9.33267 30.3576 10.0062 30.4846C10.6797 30.6116 11.2752 31.0009 11.6617 31.567C12.0482 32.1331 12.1939 32.8295 12.0669 33.503C11.9399 34.1766 11.5506 34.7721 10.9845 35.1585L10.9752 35.1305Z" fill="#FF9600"/>
                <path d="M10.9477 34.0378C9.44382 35.0653 6.6416 35.0653 6.6416 35.0653C7.14548 33.6496 8.01958 32.3949 9.17294 31.4317C9.51728 31.1964 9.94102 31.1075 10.3509 31.1846C10.7608 31.2616 11.1233 31.4984 11.3587 31.8427C11.594 32.1871 11.6829 32.6108 11.6059 33.0207C11.5288 33.4306 11.292 33.7931 10.9477 34.0285V34.0378Z" fill="#FFCB39"/>
                <path d="M4.96152 25.1717C3.54714 26.1335 0.934082 26.1371 0.934082 26.1371C0.934082 26.1371 1.75796 23.7927 3.30316 22.739C3.62576 22.5191 4.02251 22.4364 4.40612 22.509C4.78973 22.5816 5.12879 22.8036 5.3487 23.1262C5.56862 23.4488 5.65137 23.8456 5.57876 24.2292C5.50614 24.6128 5.28412 24.9518 4.96152 25.1717V25.1717Z" fill="#E87E04"/>
                <path d="M5.08821 24.4822C4.15119 25.1222 2.41504 25.1222 2.41504 25.1222C2.41504 25.1222 2.96311 23.5841 3.98853 22.8769C4.20282 22.7306 4.46644 22.6754 4.72141 22.7235C4.97638 22.7716 5.20181 22.919 5.3481 23.1332C5.4944 23.3475 5.54958 23.6112 5.5015 23.8661C5.45342 24.1211 5.30603 24.3465 5.09175 24.4928L5.08821 24.4822Z" fill="#FF9600"/>
                <path d="M5.07831 24.0684C4.50902 24.4573 3.44824 24.4573 3.44824 24.4573C3.63899 23.9214 3.96988 23.4465 4.40648 23.0819C4.53683 22.9928 4.69724 22.9591 4.85241 22.9883C5.00758 23.0175 5.1448 23.1071 5.23389 23.2374C5.32298 23.3678 5.35664 23.5282 5.32746 23.6834C5.29829 23.8385 5.20866 23.9758 5.07831 24.0648V24.0684Z" fill="#FFCB39"/>
                <path d="M16.1705 41.985C14.7561 42.9468 12.1431 42.9503 12.1431 42.9503C12.1431 42.9503 12.9669 40.606 14.5121 39.5523C14.8347 39.3323 15.2315 39.2496 15.6151 39.3222C15.9987 39.3948 16.3378 39.6168 16.5577 39.9394C16.7776 40.262 16.8604 40.6588 16.7877 41.0424C16.7151 41.426 16.4931 41.7651 16.1705 41.985V41.985Z" fill="#E87E04"/>
                <path d="M16.2972 41.2956C15.3602 41.9356 13.624 41.9356 13.624 41.9356C13.624 41.9356 14.1721 40.3974 15.1975 39.6902C15.4118 39.5439 15.6754 39.4888 15.9304 39.5368C16.1854 39.5849 16.4108 39.7323 16.5571 39.9466C16.7034 40.1609 16.7586 40.4245 16.7105 40.6795C16.6624 40.9344 16.515 41.1599 16.3007 41.3062L16.2972 41.2956Z" fill="#FF9600"/>
                <path d="M16.2873 40.8816C15.718 41.2706 14.6572 41.2706 14.6572 41.2706C14.848 40.7347 15.1789 40.2597 15.6155 39.8951C15.7458 39.806 15.9062 39.7723 16.0614 39.8015C16.2166 39.8307 16.3538 39.9203 16.4429 40.0507C16.532 40.181 16.5656 40.3414 16.5364 40.4966C16.5073 40.6518 16.4176 40.789 16.2873 40.8781V40.8816Z" fill="#FFCB39"/>
            </svg>
            <div class="earth-moon" onclick="window.location.href='https://instagram.com/fitrailyasa'" style="cursor: pointer;">
                <img class="object_earth" src="{{ asset('assets/Planet 20.png') }}" width="120px">
                <img class="object_moon" src="{{ asset('assets/earth.png') }}" width="40px">
            </div>
            <div class="box_astronaut" onclick="window.location.href='https://instagram.com/fitrailyasa'" style="cursor: pointer;">
                <img src="{{ asset('assets/Maskot2.png') }}" class="object_astronaut" width="200px">
            </div>
        </div>
        <div class="glowing_stars" onclick="window.location.href='https://instagram.com/fitrailyasa'" style="cursor: pointer;">
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
            <div class="star"></div>
        </div>
    </div>
</body>
</html>
