@extends('layouts.app')    

@section('content')
    
<div id="page-title">
    <div class="container">
        <div class="row">

            <h1 class="entry-title" itemprop="headline">Lorem ipsum dolor</h1>
            <p class="description" itemprop="description">tortor felis quam rutrum velit, pretium posuere placerat. Vitae ut nulla eget</p>

        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- #page-title -->

</div> <!-- #masthead -->

<main id="content" role="main">

<div class="section">
    <div class="container">
        <div class="row">

            <div class="three-quarters-block">
                <div class="content">
            
                    <article class="post hentry" itemscope itemprop="blogPost" itemtype="http://schema.org/Article">

                        <header class="entry-header">

                            <h2 class="entry-title" itemprop="headline">Lorem ipsum dolor sit amet</h2>

                            <div class="entry-meta">

                                <span class="post-date">
                                    <i class="fa fa-clock-o fa-fw"></i> <span class="updated">12th February 2015</span>
                                </span> <!-- .post-date -->

                                <span class="post-author">
                                    <i class="fa fa-user fa-fw"></i> Written by <span class="vcard"><a class="fn url" href="author.html">Author</a></span>
                                </span> <!-- .post-author -->

                                <span class="post-categories">
                                    <i class="fa fa-folder fa-fw"></i> <a href="blog.html" rel="tag">Category A</a>, <a href="blog.html" rel="tag">Category B</a>
                                </span> <!-- .post-categories -->

                                <span class="post-tags">
                                    <i class="fa fa-tags fa-fw"></i> <a href="blog.html" rel="tag">Tag A</a>, <a href="blog.html" rel="tag">Tag B</a>, <a href="blog.html" rel="tag">Tag C</a>
                                </span> <!-- .post-tags -->

                            </div> <!-- .entry-meta -->

                        </header> <!-- .entry-header -->

                        <div class="entry-image">
                            <img src="http://dummyimage.com/800x250/f3f3f3/d1d1d1.jpg&text=Featured+Image" alt="Featured Image" itemprop="image">
                        </div> <!-- .entry-image -->

                        <div class="entry-content" itemprop="articleBody">

                            <p>Lorem ipsum dolor sit amet, orci a faucibus, ante curabitur augue ornare nulla facilisi bibendum, tortor felis quam rutrum velit, pretium posuere placerat. Vitae ut nulla eget. Lacus sociis, eget dolor metus nam nunc leo. Tempor eget donec officia. Luctus nullam purus urna iaculis, integer dui risus, ultricies lacinia aliquet.</p>
                            <p>Lorem ipsum dolor sit amet, orci a faucibus, ante curabitur augue ornare nulla facilisi bibendum, tortor felis quam rutrum velit, pretium posuere placerat. Vitae ut nulla eget. Lacus sociis, eget dolor metus nam nunc leo. Tempor eget donec officia. Luctus nullam purus urna iaculis, integer dui risus, ultricies lacinia aliquet.</p>
                            <p>Lorem ipsum dolor sit amet, orci a faucibus, ante curabitur augue ornare nulla facilisi bibendum, tortor felis quam rutrum velit, pretium posuere placerat. Vitae ut nulla eget. Lacus sociis, eget dolor metus nam nunc leo. Tempor eget donec officia. Luctus nullam purus urna iaculis, integer dui risus, ultricies lacinia aliquet.</p>

                        </div> <!-- .entry-content -->

                    </article> <!-- .post -->

                </div> <!-- .content -->
            </div> <!-- .three-quarters-block -->
            
            <div class="one-quarter-block" role="complementary">
                <div class="sidebar">

                    <div class="search-widget widget">
                        <form class="widget-form" action="#" method="get" role="search">
                            <label>
                                <span class="screen-reader-text">Search this website:</span>
                                <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="search" title="Search" />
                            </label>
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div> <!-- .search.widget -->

                    <div class="widget">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            <li><a href="blog.html">Category One</a></li>   
                        </ul>
                    </div> <!-- .widget -->

                    <div class="widget">
                        <h3 class="widget-title">Archives</h3>
                        <ul>
                            <li><a href="blog.html">July 2015</a></li>
                        </ul>
                    </div> <!-- .widget -->

                </div> <!-- .sidebar -->
            </div> <!-- .one-quarter-block -->

        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- .section -->

</main> <!-- #content -->
 
@endsection