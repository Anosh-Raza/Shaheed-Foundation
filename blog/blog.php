<?php 
$page_title = "Blog - Al Shaheed Hospital ";
include "../includes/header.php"; 
?>

<!-- Blog Hero Section -->
<section class="blog-hero">
  <div class="container">
    <div class="hero-content">
      <h1>Health Blog & News</h1>
      <p>Stay informed with the latest health tips, medical news, and hospital updates from our expert medical team.</p>
    </div>
  </div>
</section>

<!-- Blog Content Section -->
<section class="blog-content">
  <div class="container">
    <div class="blog-wrapper">
      <!-- Main Blog Posts -->
      <div class="blog-main">
        <div class="blog-filters">
          <button class="filter-btn active" data-filter="all">All Posts</button>
          <button class="filter-btn" data-filter="health-tips">Health Tips</button>
          <button class="filter-btn" data-filter="medical-news">Medical News</button>
          <button class="filter-btn" data-filter="hospital-updates">Hospital Updates</button>
        </div>

        <div class="blog-posts">
          <!-- Blog Post 1 -->
          <article class="blog-post" data-category="health-tips">
            <div class="post-image">
              <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=250&fit=crop" alt="Healthy Lifestyle Tips">
              <div class="post-category">Health Tips</div>
            </div>
            <div class="post-content">
              <div class="post-meta">
                <span class="post-date">December 15, 2024</span>
                <span class="post-author">Dr. Sarah Ahmed</span>
              </div>
              <h3 class="post-title">10 Essential Health Tips for Winter Season</h3>
              <p class="post-excerpt">As winter approaches, it's important to take extra care of your health. Here are 10 essential tips to keep you healthy and strong during the colder months...</p>
              <a href="#" class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </article>

          <!-- Blog Post 2 -->
          <article class="blog-post" data-category="medical-news">
            <div class="post-image">
              <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=400&h=250&fit=crop" alt="Medical Research">
              <div class="post-category">Medical News</div>
            </div>
            <div class="post-content">
              <div class="post-meta">
                <span class="post-date">December 10, 2024</span>
                <span class="post-author">Dr. Mohammad Hassan</span>
              </div>
              <h3 class="post-title">New Breakthrough in Diabetes Treatment</h3>
              <p class="post-excerpt">Recent research has shown promising results in the treatment of Type 2 diabetes. Our medical team discusses the implications of these findings...</p>
              <a href="#" class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </article>

          <!-- Blog Post 3 -->
          <article class="blog-post" data-category="hospital-updates">
            <div class="post-image">
              <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=400&h=250&fit=crop" alt="Hospital Expansion">
              <div class="post-category">Hospital Updates</div>
            </div>
            <div class="post-content">
              <div class="post-meta">
                <span class="post-date">December 5, 2024</span>
                <span class="post-author">Hospital Administration</span>
              </div>
              <h3 class="post-title">Hospital Expansion: New Cardiology Wing Opens</h3>
              <p class="post-excerpt">We're excited to announce the opening of our new state-of-the-art cardiology wing, equipped with the latest technology and staffed by expert cardiologists...</p>
              <a href="#" class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </article>

          <!-- Blog Post 4 -->
          <article class="blog-post" data-category="health-tips">
            <div class="post-image">
              <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&h=250&fit=crop" alt="Mental Health">
              <div class="post-category">Health Tips</div>
            </div>
            <div class="post-content">
              <div class="post-meta">
                <span class="post-date">November 28, 2024</span>
                <span class="post-author">Dr. Aisha Khan</span>
              </div>
              <h3 class="post-title">Mental Health Awareness: Breaking the Stigma</h3>
              <p class="post-excerpt">Mental health is just as important as physical health. Learn about the signs to watch for and how to support yourself and others...</p>
              <a href="#" class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </article>

          <!-- Blog Post 5 -->
          <article class="blog-post" data-category="medical-news">
            <div class="post-image">
              <img src="https://images.unsplash.com/photo-1551076805-e3639032970e?w=400&h=250&fit=crop" alt="Vaccination">
              <div class="post-category">Medical News</div>
            </div>
            <div class="post-content">
              <div class="post-meta">
                <span class="post-date">November 20, 2024</span>
                <span class="post-author">Dr. Imran Ali</span>
              </div>
              <h3 class="post-title">Importance of Regular Vaccinations for Adults</h3>
              <p class="post-excerpt">Vaccinations aren't just for children. Adults also need regular vaccinations to protect against various diseases and maintain good health...</p>
              <a href="#" class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </article>

          <!-- Blog Post 6 -->
          <article class="blog-post" data-category="hospital-updates">
            <div class="post-image">
              <img src="https://images.unsplash.com/photo-1584464491033-06628f3a6b7b?w=400&h=250&fit=crop" alt="Community Health">
              <div class="post-category">Hospital Updates</div>
            </div>
            <div class="post-content">
              <div class="post-meta">
                <span class="post-date">November 15, 2024</span>
                <span class="post-author">Community Health Team</span>
              </div>
              <h3 class="post-title">Free Health Camp Success: 500+ Patients Served</h3>
              <p class="post-excerpt">Our recent free health camp was a tremendous success, providing medical care to over 500 patients in underserved communities...</p>
              <a href="#" class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </article>
        </div>

        <!-- Pagination -->
        <div class="pagination">
          <button class="page-btn prev-btn" disabled>
            <i class="fa-solid fa-chevron-left"></i> Previous
          </button>
          <div class="page-numbers">
            <button class="page-number active">1</button>
            <button class="page-number">2</button>
            <button class="page-number">3</button>
          </div>
          <button class="page-btn next-btn">
            Next <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>
      </div>

      <!-- Sidebar -->
      <aside class="blog-sidebar">
        <!-- Search -->
        <div class="sidebar-widget">
          <h3>Search Blog</h3>
          <form class="search-form">
            <input type="text" placeholder="Search articles...">
            <button type="submit"><i class="fa-solid fa-search"></i></button>
          </form>
        </div>

        <!-- Recent Posts -->
        <div class="sidebar-widget">
          <h3>Recent Posts</h3>
          <div class="recent-posts">
            <div class="recent-post">
              <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=80&h=60&fit=crop" alt="Recent Post">
              <div class="recent-content">
                <h4>Winter Health Tips</h4>
                <span class="recent-date">Dec 15, 2024</span>
              </div>
            </div>
            <div class="recent-post">
              <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=80&h=60&fit=crop" alt="Recent Post">
              <div class="recent-content">
                <h4>Diabetes Treatment Breakthrough</h4>
                <span class="recent-date">Dec 10, 2024</span>
              </div>
            </div>
            <div class="recent-post">
              <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=80&h=60&fit=crop" alt="Recent Post">
              <div class="recent-content">
                <h4>New Cardiology Wing</h4>
                <span class="recent-date">Dec 5, 2024</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Categories -->
        <div class="sidebar-widget">
          <h3>Categories</h3>
          <ul class="category-list">
            <li><a href="#">Health Tips <span>(12)</span></a></li>
            <li><a href="#">Medical News <span>(8)</span></a></li>
            <li><a href="#">Hospital Updates <span>(6)</span></a></li>
            <li><a href="#">Patient Stories <span>(4)</span></a></li>
            <li><a href="#">Research <span>(3)</span></a></li>
          </ul>
        </div>

        <!-- Newsletter -->
        <div class="sidebar-widget newsletter-widget">
          <h3>Stay Updated</h3>
          <p>Subscribe to our newsletter for the latest health tips and hospital news.</p>
          <form class="newsletter-form">
            <input type="email" placeholder="Enter your email">
            <button type="submit">Subscribe</button>
          </form>
        </div>
      </aside>
    </div>
  </div>
</section>

<style>
.blog-hero {
  background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
  color: var(--white);
  padding: 100px 20px 80px;
  text-align: center;
}

.hero-content h1 {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 20px;
}

.hero-content p {
  font-size: 1.2rem;
  max-width: 600px;
  margin: 0 auto;
  line-height: 1.6;
}

.blog-content {
  padding: 80px 20px;
  background: var(--light);
}

.blog-wrapper {
  display: grid;
  grid-template-columns: 2fr 1fr;
  gap: 60px;
}

.blog-filters {
  display: flex;
  gap: 15px;
  margin-bottom: 40px;
  flex-wrap: wrap;
}

.filter-btn {
  padding: 10px 20px;
  border: 2px solid var(--primary-color);
  background: var(--white);
  color: var(--primary-color);
  border-radius: 25px;
  cursor: pointer;
  transition: all 0.3s ease;
  font-weight: 500;
}

.filter-btn:hover,
.filter-btn.active {
  background: var(--primary-color);
  color: var(--white);
}

.blog-posts {
  display: grid;
  gap: 40px;
  margin-bottom: 50px;
}

.blog-post {
  background: var(--white);
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0,0,0,0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.blog-post:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.post-image {
  position: relative;
  height: 250px;
  overflow: hidden;
}

.post-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.blog-post:hover .post-image img {
  transform: scale(1.05);
}

.post-category {
  position: absolute;
  top: 15px;
  left: 15px;
  background: var(--primary-color);
  color: var(--white);
  padding: 5px 15px;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: 600;
}

.post-content {
  padding: 30px;
}

.post-meta {
  display: flex;
  gap: 20px;
  margin-bottom: 15px;
  font-size: 0.9rem;
  color: #666;
}

.post-date {
  color: var(--primary-color);
}

.post-title {
  font-size: 1.5rem;
  color: var(--secondary-color);
  margin-bottom: 15px;
  line-height: 1.4;
}

.post-excerpt {
  color: #666;
  line-height: 1.6;
  margin-bottom: 20px;
}

.read-more {
  color: var(--primary-color);
  text-decoration: none;
  font-weight: 600;
  transition: color 0.3s ease;
}

.read-more:hover {
  color: #d4650a;
}

.read-more i {
  margin-left: 5px;
  transition: transform 0.3s ease;
}

.read-more:hover i {
  transform: translateX(3px);
}

.pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
  margin-top: 50px;
}

.page-btn {
  padding: 10px 20px;
  border: 2px solid var(--primary-color);
  background: var(--white);
  color: var(--primary-color);
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.page-btn:hover:not(:disabled) {
  background: var(--primary-color);
  color: var(--white);
}

.page-btn:disabled {
  opacity: 0.5;
  cursor: not-allowed;
}

.page-numbers {
  display: flex;
  gap: 5px;
}

.page-number {
  width: 40px;
  height: 40px;
  border: 2px solid var(--primary-color);
  background: var(--white);
  color: var(--primary-color);
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
}

.page-number:hover,
.page-number.active {
  background: var(--primary-color);
  color: var(--white);
}

/* Sidebar Styles */
.blog-sidebar {
  display: flex;
  flex-direction: column;
  gap: 40px;
}

.sidebar-widget {
  background: var(--white);
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

.sidebar-widget h3 {
  color: var(--primary-color);
  font-size: 1.3rem;
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 2px solid var(--light);
}

.search-form {
  display: flex;
  gap: 10px;
}

.search-form input {
  flex: 1;
  padding: 12px 15px;
  border: 2px solid #ddd;
  border-radius: 8px;
  font-size: 1rem;
}

.search-form button {
  padding: 12px 15px;
  background: var(--primary-color);
  color: var(--white);
  border: none;
  border-radius: 8px;
  cursor: pointer;
}

.recent-posts {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.recent-post {
  display: flex;
  gap: 15px;
  align-items: center;
}

.recent-post img {
  width: 60px;
  height: 60px;
  object-fit: cover;
  border-radius: 8px;
}

.recent-content h4 {
  font-size: 0.9rem;
  color: var(--secondary-color);
  margin-bottom: 5px;
  line-height: 1.3;
}

.recent-date {
  font-size: 0.8rem;
  color: #666;
}

.category-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.category-list li {
  margin-bottom: 10px;
}

.category-list a {
  color: #666;
  text-decoration: none;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: color 0.3s ease;
}

.category-list a:hover {
  color: var(--primary-color);
}

.category-list span {
  background: var(--light);
  color: var(--primary-color);
  padding: 2px 8px;
  border-radius: 12px;
  font-size: 0.8rem;
}

.newsletter-form {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.newsletter-form input {
  padding: 12px 15px;
  border: 2px solid #ddd;
  border-radius: 8px;
  font-size: 1rem;
}

.newsletter-form button {
  padding: 12px;
  background: var(--primary-color);
  color: var(--white);
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-weight: 600;
}

@media (max-width: 992px) {
  .blog-wrapper {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  
  .blog-filters {
    justify-content: center;
  }
}

@media (max-width: 768px) {
  .hero-content h1 {
    font-size: 2rem;
  }
  
  .post-content {
    padding: 20px;
  }
  
  .sidebar-widget {
    padding: 20px;
  }
  
  .pagination {
    flex-wrap: wrap;
  }
}
</style>

<script>
// Blog filter functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const blogPosts = document.querySelectorAll('.blog-post');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');

            const filter = this.dataset.filter;

            blogPosts.forEach(post => {
                if (filter === 'all' || post.dataset.category === filter) {
                    post.style.display = 'block';
                } else {
                    post.style.display = 'none';
                }
            });
        });
    });

    // Search functionality
    const searchForm = document.querySelector('.search-form');
    const searchInput = searchForm.querySelector('input');

    searchForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const searchTerm = searchInput.value.toLowerCase();
        
        blogPosts.forEach(post => {
            const title = post.querySelector('.post-title').textContent.toLowerCase();
            const excerpt = post.querySelector('.post-excerpt').textContent.toLowerCase();
            
            if (title.includes(searchTerm) || excerpt.includes(searchTerm)) {
                post.style.display = 'block';
            } else {
                post.style.display = 'none';
            }
        });
    });
});
</script>

<?php include "../includes/footer.php"; ?>



