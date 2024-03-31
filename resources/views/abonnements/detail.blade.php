@extends('layouts.add')
@section('content')
<style>
    
    body{
    font-size: 16px;
    color: #6f6f6f;
    font-weight: 400;
    line-height: 28px;
    letter-spacing: 0.8px;
    margin-top:20px;
}
.font-size38 {
    font-size: 38px;
}
.team-single-text .section-heading h4,
.section-heading h5 {
    font-size: 36px
}

.team-single-text .section-heading.half {
    margin-bottom: 20px
}

@media screen and (max-width: 1199px) {
    .team-single-text .section-heading h4,
    .section-heading h5 {
        font-size: 32px
    }
    .team-single-text .section-heading.half {
        margin-bottom: 15px
    }
}

@media screen and (max-width: 991px) {
    .team-single-text .section-heading h4,
    .section-heading h5 {
        font-size: 28px
    }
    .team-single-text .section-heading.half {
        margin-bottom: 10px
    }
}

@media screen and (max-width: 767px) {
    .team-single-text .section-heading h4,
    .section-heading h5 {
        font-size: 24px
    }
}


.team-single-icons ul li {
    display: inline-block;
    border: 1px solid #02c2c7;
    border-radius: 50%;
    color: #86bc42;
    margin-right: 8px;
    margin-bottom: 5px;
    -webkit-transition-duration: .3s;
    transition-duration: .3s
}

.team-single-icons ul li a {
    color: #02c2c7;
    display: block;
    font-size: 14px;
    height: 25px;
    line-height: 26px;
    text-align: center;
    width: 25px
}

.team-single-icons ul li:hover {
    background: #02c2c7;
    border-color: #02c2c7
}

.team-single-icons ul li:hover a {
    color: #fff
}

.team-social-icon li {
    display: inline-block;
    margin-right: 5px
}

.team-social-icon li:last-child {
    margin-right: 0
}

.team-social-icon i {
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    font-size: 15px;
    border-radius: 50px
}

.padding-30px-all {
    padding: 30px;
}
.bg-light-gray {
    background-color: #f7f7f7;
}
.text-center {
    text-align: center!important;
}
img {
    max-width: 100%;
    height: auto;
}


.list-style9 {
    list-style: none;
    padding: 0
}

.list-style9 li {
    position: relative;
    padding: 0 0 15px 0;
    margin: 0 0 15px 0;
    border-bottom: 1px dashed rgba(0, 0, 0, 0.1)
}

.list-style9 li:last-child {
    border-bottom: none;
    padding-bottom: 0;
    margin-bottom: 0
}


.text-sky {
    color: #02c2c7
}

.text-orange {
    color: #e95601
}

.text-green {
    color: #5bbd2a
}

.text-yellow {
    color: #f0d001
}

.text-pink {
    color: #ff48a4
}

.text-purple {
    color: #9d60ff
}

.text-lightred {
    color: #ff5722
}

a.text-sky:hover {
    opacity: 0.8;
    color: #02c2c7
}

a.text-orange:hover {
    opacity: 0.8;
    color: #e95601
}

a.text-green:hover {
    opacity: 0.8;
    color: #5bbd2a
}

a.text-yellow:hover {
    opacity: 0.8;
    color: #f0d001
}

a.text-pink:hover {
    opacity: 0.8;
    color: #ff48a4
}

a.text-purple:hover {
    opacity: 0.8;
    color: #9d60ff
}

a.text-lightred:hover {
    opacity: 0.8;
    color: #ff5722
}

.custom-progress {
    height: 10px;
    border-radius: 50px;
    box-shadow: none;
    margin-bottom: 25px;
}
.progress {
    display: -ms-flexbox;
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: .75rem;
    background-color: #e9ecef;
    border-radius: .25rem;
}


.bg-sky {
    background-color: #02c2c7
}

.bg-orange {
    background-color: #e95601
}

.bg-green {
    background-color: #5bbd2a
}

.bg-yellow {
    background-color: #f0d001
}

.bg-pink {
    background-color: #ff48a4
}

.bg-purple {
    background-color: #9d60ff
}

.bg-lightred {
    background-color: #ff5722
}
.small-font {
        font-size: 10px; /* Adjust the font size as needed */
    }
.container {
    transition: transform 0.3s ease; /* This could cause a sliding effect */
}
.team-single-img img {
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .contact-info-section ul li {
            margin-bottom: 25px;
        }

        .contact-info-section ul li:last-child {
            margin-bottom: 0;
        }

        .contact-info-section strong {
            font-weight: 600;
        }

        .contact-info-section p {
            margin-bottom: 0;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons ul {
            padding: 0;
            list-style: none;
        }

        .social-icons ul li {
            display: inline-block;
            margin-right: 10px;
        }

        .social-icons ul li:last-child {
            margin-right: 0;
        }

        .social-icons ul li a {
            color: #555;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .social-icons ul li a:hover {
            color: #02c2c7;
        }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
<div class="container">
    <div class="team-single">
        <div class="row">
            <div class="col-lg-4 col-md-5 xs-margin-30px-bottom">
                <div class="team-single-img text-center"> <!-- Added text-center class here -->
                    <img src="{{ asset($membre->photo) }}" alt="Membre Photo">
                </div>
                <div class="bg-light-gray padding-30px-all md-padding-25px-all sm-padding-20px-all text-center">
                    <h4 class="margin-10px-bottom font-size24 md-font-size22 sm-font-size20 font-weight-600">{{$membre->prenom}} {{$membre->nom}}</h4>
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-8 col-md-7">
                <div class="team-single-text padding-50px-left sm-no-padding-left">
                    <div class="contact-info-section">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="{{ route('membres.index') }}" class="btn btn-secondary float-right" style="margin-top: 20px; text-decoration: none; color: #fff; background-color: #6c757d; border-color: #6c757d; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s ease;">Retourner</a>
                            </div>
                        </div><br>
                        <ul class="list-style9">
                            <li>
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong class="text-orange">ID:</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{$membre->id}}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong class="text-yellow">Nom:</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{$membre->nom}}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-4">
                                        <i class="far fa-file text-lightred"></i>
                                        <strong class="margin-10px-left text-lightred">Prenom:</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{$membre->prenom}}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-4">
                                        <i class="fas fa-map-marker-alt text-green"></i>
                                        <strong class="margin-10px-left text-green">Adresse:</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{$membre->adresse}}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-4">
                                        <i class="fas fa-calendar-alt" style="color: #ffa200;"></i>
                                        <strong class="margin-10px-left text-lightred">Date Naissance:</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{$membre->date_naiss}}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-4">
                                        <i class="fas fa-envelope text-purple"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-purple">Email:</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{$membre->email}}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-4">
                                        <i class="fas fa-venus-mars text-pink"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-pink">Sexe:</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{$membre->sexe}}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-4">
                                        <i class="fas fa-ruler text-green"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-green">Taille:</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{$membre->taille}}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-4">
                                        <i class="fas fa-weight text-blue"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-blue">Poids:</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{$membre->poids}}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>

@endsection