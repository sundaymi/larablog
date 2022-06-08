@extends('layouts.app')

@section('content')
    <div class="container">   
        <h1>My blog/posts!</h1>
        @foreach($posts as $post)
            @include('includes.post')
        @endforeach

        <!doctype html>
<html>

<body class="blog" itemscope itemtype="http://schema.org/Blog">

	<div id="masthead">

		<div id="site-header" role="banner">
			<div class="container">
				<div class="row">

					<div id="branding">
						<a class="logo" href="index.html">Canvas</a>
					</div> <!-- #branding -->

					<nav id="main-menu" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<ul class="horizontal-navigation">
							<li class="menu-home" itemprop="url"><a href="index.html" title="Home" itemprop="name">Home</a></li>
							<li class="menu-about" itemprop="url"><a href="about.html" title="About" itemprop="name">About</a></li>
							<li class="menu-portfolio" itemprop="url"><a href="portfolio.html" title="Portfolio" itemprop="name">Portfolio</a></li>
							<li class="menu-blog active" itemprop="url"><a href="blog.html" title="Blog" itemprop="name">Blog</a></li>
							<li class="menu-contact" itemprop="url"><a href="contact.html" title="Contact" itemprop="name">Contact</a></li>
						</ul>
					</nav> <!-- #main-menu -->

				</div> <!-- .row -->
			</div> <!-- .container -->
		</div> <!-- #site-header -->

		<div id="page-title">
			<div class="container">
				<div class="row">

					<h1 class="entry-title" itemprop="headline">Blog</h1>
					<p class="description" itemprop="description">Latest articles from our blog</p>

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
                            @foreach ($posts as $post) 
							    <article class="post summary hentry" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                                    <header class="entry-header">

                                        <h2 class="entry-title" itemprop="headline"><a href="article.html" title="Article Title" rel="bookmark" itemprop="url">{{ $post->title }}</a></h2>

                                        <div class="entry-meta">

                                            <span class="post-date">
                                                <i class="fa fa-clock-o fa-fw"></i> <span class="updated">{{ date('d-m-Y', strtotime($post->created_at)) }}</span>
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

                                    <div class="entry-thumbnail">
                                        <a href="article.html" title="Blog Post">
                                            <img src="http://dummyimage.com/150x150/f3f3f3/d1d1d1.jpg&text=Thumbnail" alt="Blog Post" itemprop="image">
                                        </a>
                                    </div> <!-- .entry-thumbnail -->

                                    <div class="entry-summary" itemprop="articleBody">

                                        <p>
                                            {{ $post->body }}
                                        </p>
                                        <a class="more button" href="article.html">Read More</a>

                                    </div> <!-- .entry-summary -->

							    </article> <!-- .post.summary -->
                            @endforeach

							<div class="pagination">

								<a class="prev button" href="blog.html"><i class="fa fa-chevron-left"></i> Previous Page</a>
								<a class="next button" href="blog.html">Next Page <i class="fa fa-chevron-right"></i></a>

							</div> <!-- .pagination -->

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