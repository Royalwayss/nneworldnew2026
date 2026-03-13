@extends('front.layout.layout')
@section('content')
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg" style="background-image: url(front/assets/images//banner-articles.jpg);">
    </div>
    <div class="shape-box"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content">

                    <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li class="active"> Articles</li>
                        </ul>
                    </div>
                    <div class="title aos-init aos-animate" data-aos="fade-up" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <h2> Articles</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <section class="about-style2-area">
        <section class="faq-page-one">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-12 col-lg-10 col-xl-10 m-auto">
                        <div class="faq-style1-content">
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer">
                                            <i class="flaticon-down-arrow-2"></i>
                                        </div>
                                        <h3>
                                            Important Articles
                                        </h3>
                                    </div>
                                    <div class="acc-content current" style="display: block;">
                                        <table class="table financial-table">
                                            <thead class="custom-table-header">
                                                <tr>
                                                    <th class="date-col">Date</th>

                                                    <th class="title-col">Title</th>
                                                    <th class="author-col">Author</th>
                                                    <th class="document-col">Document</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>15-05-2025</td>

                                                    <td>Msme D</td>
                                                    <td>CA, Sanjeev Bhandari</td>
                                                    <td><a href="front/assets/images//pdf/msme.pdf" target="_blank"><i
                                                                class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                                                </tr>
                                                <!-- <tr>
                                                                <td></td>

                                                                <td>Article on TDS on Purchase of Property</td>
                                                                <td></td>
                                                                <td><a href="front/assets/images//pdf/article.pdf"><i class="fa fa-file-pdf-o"
                                                                            aria-hidden="true"></i></a></td>
                                                            </tr> -->
                                                <!-- <tr>
                                                                <td></td>

                                                                <td>Form 3CB-3CD_Filed Form (A.Y.2020-21)</td>
                                                                <td></td>
                                                                <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>

                                                                <td>Form 3CB-3CD_Filed Form (A.Y.2021-22)</td>
                                                                <td></td>
                                                                <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>

                                                                <td>Form 3CB-3CD_Filed Form (A.Y.2022-23)</td>
                                                                <td></td>
                                                                <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
                                                            </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                                <li class="accordion block ">
                                    <div class="acc-btn ">
                                        <div class="icon-outer">
                                            <i class="flaticon-down-arrow-2"></i>
                                        </div>
                                        <h3>
                                            Real Estate Planning
                                        </h3>
                                    </div>
                                    <div class="acc-content">
                                        <table class="table financial-table">
                                            <thead class="custom-table-header">
                                                <tr>
                                                    <th class="date-col">Date</th>
                                                    <!-- <th class="sno-col">S No:</th> -->
                                                    <th class="title-col">Title</th>
                                                    <th class="author-col">Author</th>
                                                    <th class="document-col">Document</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- <tr>
                                                                    <td>15-05-2025</td> 

                                                                    <td>Form 3CB-3CD_Filed Form (A.Y.2018-19)</td>
                                                                    <td>CA, Sanjeev Bhandari</td> 
                                                                    <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
                                                                </tr> -->

                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <i class="flaticon-down-arrow-2"></i>
                                        </div>
                                        <h3>
                                            Business Planning
                                        </h3>
                                    </div>
                                    <div class="acc-content" style="">
                                        <table class="table financial-table">
                                            <thead class="custom-table-header">
                                                <tr>
                                                    <th class="date-col">Date</th>
                                                    <!-- <th class="sno-col">S No:</th> -->
                                                    <th class="title-col">Title</th>
                                                    <th class="author-col">Author</th>
                                                    <th class="document-col">Document</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- <tr>
                                                                <td>15-05-2025</td>

                                                                <td>Msme classification and Incentives under PMEGP Scheme</td>
                                                                <td>CA, Sanjeev Bhandari</td> 
                                                                <td><a href="front/assets/images//pdf/msme.pdf"><i class="fa fa-file-pdf-o"
                                                                            aria-hidden="true"></i></a></td>
                                                            </tr> -->

                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <i class="flaticon-down-arrow-2"></i>
                                        </div>
                                        <h3>
                                            MSME Finance & Incentives
                                        </h3>
                                    </div>
                                    <div class="acc-content" style="">
                                        <table class="table financial-table">
                                            <thead class="custom-table-header">
                                                <tr>
                                                    <th class="date-col">Date</th>
                                                    <!-- <th class="sno-col">S No:</th> -->
                                                    <th class="title-col">Title</th>
                                                    <th class="author-col">Author</th>
                                                    <th class="document-col">Document</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>15-05-2025</td> <!-- Empty date cell -->
                                                    <!-- <td>1</td> -->
                                                    <td>Msme classification and Incentives under PMEGP Scheme</td>
                                                    <td>CA, Sanjeev Bhandari</td> <!-- Empty author cell -->
                                                    <td><a href="front/assets/images//pdf/msme.pdf" target="_blank"><i
                                                                class="fa fa-file-pdf-o" aria-hidden="true"></i></a></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <i class="flaticon-down-arrow-2"></i>
                                        </div>
                                        <h3>
                                            GST on Real Estate & others
                                        </h3>
                                    </div>
                                    <div class="acc-content" style="">
                                        <table class="table financial-table">
                                            <thead class="custom-table-header">
                                                <tr>
                                                    <th class="date-col">Date</th>
                                                    <!-- <th class="sno-col">S No:</th> -->
                                                    <th class="title-col">Title</th>
                                                    <th class="author-col">Author</th>
                                                    <th class="document-col">Document</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>15-05-2025</td> <!-- Empty date cell -->
                                                    <!-- <td>1</td> -->
                                                    <td>Recovery of GST Dues From Companies or LLP Under IBC Code 2016 </td>
                                                    <td>CA, Sanjeev Bhandari</td> <!-- Empty author cell -->
                                                    <td><a href="front/assets/images//pdf/recovery-of-gst-due-from-companies.pdf"
                                                            target="_blank"><i class="fa fa-file-pdf-o"
                                                                aria-hidden="true"></i></a></td>
                                                </tr>
												<tr>
                                                    <td>15-05-2025</td> <!-- Empty date cell -->
                                                    <!-- <td>1</td> -->
                                                    <td>RCM Under GST ON Immovable Rental Property</td>
                                                    <td>CA Avneet Singh</td> 
                                                    <td><a href="front/assets/images/pdf/rcm-under-gst-on-immovable-rental-property.pdf"
                                                            target="_blank"><i class="fa fa-file-pdf-o"
                                                                aria-hidden="true"></i></a></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <i class="flaticon-down-arrow-2"></i>
                                        </div>
                                        <h3>
                                            Income Tax on Real Estate & others
                                        </h3>
                                    </div>
                                    <div class="acc-content" style="">
                                        <table class="table financial-table">
                                            <thead class="custom-table-header">
                                                <tr>
                                                    <th class="date-col">Date</th>
                                                    <!-- <th class="sno-col">S No:</th> -->
                                                    <th class="title-col">Title</th>
                                                    <th class="author-col">Author</th>
                                                    <th class="document-col">Document</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>15-05-2025</td> <!-- Empty date cell -->
                                                    <!-- <td>1</td> -->
                                                    <td>Article on TDS on Purchase of Property</td>
                                                    <td>CA. Pushkal Soni
                                                    </td> <!-- Empty author cell -->
                                                    <td><a href="front/assets/images//pdf/article-tds.pdf"
                                                            target="_blank"><i class="fa fa-file-pdf-o"
                                                                aria-hidden="true"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>27-06-2025</td>
                                                    <!-- <td>1</td> -->
                                                    <td>Capital Gain on Sale of Residential house</td>
                                                    <td> Harish Kumar Aneja, FCA, B.Com, DISA
                                                    </td> <!-- Empty author cell -->
                                                    <td><a href="front/assets/images//pdf/article-on-capital-gain-on-real-estate-sale.pdf"
                                                            target="_blank"><i class="fa fa-file-pdf-o"
                                                                aria-hidden="true"></i></a></td>
                                                </tr>
                                                <!-- <tr>
                                                                <td></td>

                                                                <td>Form 3CB-3CD_Filed Form (A.Y.2019-20)</td>
                                                                <td></td>
                                                                <td><i class="fa fa-file-pdf-o" aria-hidden="true"></i></td>
                                                            </tr> -->

                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer">
                                            <i class="flaticon-down-arrow-2"></i>
                                        </div>
                                        <h3>
                                            NPA Management & OTS
                                        </h3>
                                    </div>
                                    <div class="acc-content" style="">
                                        <table class="table financial-table">
                                            <thead class="custom-table-header">
                                                <tr>
                                                    <th class="date-col">Date</th>
                                                    <!-- <th class="sno-col">S No:</th> -->
                                                    <th class="title-col">Title</th>
                                                    <th class="author-col">Author</th>
                                                    <th class="document-col">Document</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- <tr>
                                                                <td>15-05-2025</td>

                                                                <td>Msme classification and Incentives under PMEGP Scheme</td>
                                                                <td>CA, Sanjeev Bhandari</td>
                                                                <td><a href="front/assets/images//pdf/msme.pdf"><i class="fa fa-file-pdf-o"
                                                                            aria-hidden="true"></i></a></td>
                                                            </tr> -->

                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>

<section class="slogan-style2-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="slogan-style2-content">
                    <div class="title">
                        <h2>We’re Delivering the Best<br> Customer Experience</h2>
                    </div>
                    <div class="button-box">
                        <a class="btn-one" href="{{ route('contactus') }}"><span class="txt">Join Us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection