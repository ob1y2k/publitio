@extends('layouts.main')

@section('title', 'Digital Rights Management (DRM) Solutions | Publitio')
@section('description', 'Protect your premium video and audio content with Publitio\'s enterprise-grade DRM solutions. HLS encryption, access control, and secure streaming for your media assets.')

@section('content')

<!-- Hero Section -->
<section class="hero-section drm-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="hero-title">Digital Rights Management</h1>
                <p class="hero-subtitle">Protect Your Premium Content with Enterprise-Grade DRM</p>
                <p class="hero-description">
                    Secure your videos, audio files, and digital media with Publitio's comprehensive DRM solutions.
                    Prevent unauthorized access, piracy, and content theft while delivering seamless playback experiences to your authorized users.
                </p>
                <div class="hero-cta">
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Start Free Trial</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-lg">Contact Sales</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image">
                    <img src="{{ asset('images/solutions/drm-hero.svg') }}" alt="DRM Protection Illustration" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features Section -->
<section class="features-section">
    <div class="container">
        <div class="section-header text-center">
            <h2>Comprehensive Content Protection</h2>
            <p>Everything you need to secure and monetize your digital content</p>
        </div>

        <div class="row features-grid">
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3>HLS Encryption</h3>
                    <p>Industry-standard AES-128 encryption for HTTP Live Streaming. Your video content is encrypted at rest and in transit, ensuring only authorized viewers can access it.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Multi-DRM Support</h3>
                    <p>Support for Widevine, FairPlay, and PlayReady DRM systems. Deliver protected content across all devices and platforms with a single workflow.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-key"></i>
                    </div>
                    <h3>Secure Token Authentication</h3>
                    <p>Generate time-limited, signed URLs for your protected content. Control exactly who can access your media and for how long.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3>Access Control</h3>
                    <p>Define granular access policies based on user roles, geographic location, device type, or custom parameters. Full control over who sees what.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Geo-Restrictions</h3>
                    <p>Restrict content access by country or region. Perfect for licensing agreements and regional content distribution requirements.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Analytics & Monitoring</h3>
                    <p>Track playback attempts, detect suspicious activity, and monitor content usage in real-time. Comprehensive reporting for compliance.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="how-it-works-section bg-light">
    <div class="container">
        <div class="section-header text-center">
            <h2>How Publitio DRM Works</h2>
            <p>Simple integration, powerful protection</p>
        </div>

        <div class="row steps-container">
            <div class="col-lg-3 col-md-6">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h4>Upload</h4>
                    <p>Upload your video or audio content to Publitio via API, dashboard, or direct integration.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h4>Enable DRM</h4>
                    <p>Enable DRM protection with a single API call or toggle in the dashboard. Choose your encryption settings.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h4>Configure Access</h4>
                    <p>Set up access rules, token policies, and distribution parameters for your protected content.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="step-card">
                    <div class="step-number">4</div>
                    <h4>Deliver Securely</h4>
                    <p>Stream protected content to authorized users via our global CDN with built-in license delivery.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases Section -->
<section class="use-cases-section">
    <div class="container">
        <div class="section-header text-center">
            <h2>Perfect For</h2>
            <p>Industries and applications that benefit from DRM protection</p>
        </div>

        <div class="row use-cases-grid">
            <div class="col-lg-4 col-md-6">
                <div class="use-case-card">
                    <div class="use-case-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4>E-Learning & Online Courses</h4>
                    <p>Protect your educational content and course materials. Prevent unauthorized sharing and preserve the value of your curriculum.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="use-case-card">
                    <div class="use-case-icon">
                        <i class="fas fa-film"></i>
                    </div>
                    <h4>Media & Entertainment</h4>
                    <p>Secure movies, TV shows, and premium video content. Meet studio requirements and licensing agreements with confidence.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="use-case-card">
                    <div class="use-case-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h4>Fitness & Wellness</h4>
                    <p>Keep your workout videos and wellness programs exclusive to paying members. Maintain subscription value.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="use-case-card">
                    <div class="use-case-icon">
                        <i class="fas fa-music"></i>
                    </div>
                    <h4>Music & Audio</h4>
                    <p>Protect audio tracks, podcasts, and music content from piracy. Secure your intellectual property.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="use-case-card">
                    <div class="use-case-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h4>Corporate Training</h4>
                    <p>Secure internal training videos and confidential corporate content. Control access within your organization.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="use-case-card">
                    <div class="use-case-icon">
                        <i class="fas fa-broadcast-tower"></i>
                    </div>
                    <h4>Live Streaming</h4>
                    <p>Protect live events, webinars, and pay-per-view broadcasts. Ensure only ticket holders can tune in.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="benefits-image">
                    <img src="{{ asset('images/solutions/drm-benefits.svg') }}" alt="DRM Benefits" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="benefits-content">
                    <h2>Why Choose Publitio DRM?</h2>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="benefit-text">
                            <h5>No Infrastructure Required</h5>
                            <p>Fully managed DRM service. No need to set up license servers or manage encryption keys yourself.</p>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="benefit-text">
                            <h5>Simple API Integration</h5>
                            <p>Enable DRM with just a few API calls. Comprehensive SDKs and documentation for quick implementation.</p>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="benefit-text">
                            <h5>Global CDN Delivery</h5>
                            <p>Protected content delivered through our worldwide CDN for fast, reliable playback anywhere.</p>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="benefit-text">
                            <h5>Cost-Effective</h5>
                            <p>Enterprise-grade protection without enterprise pricing. Pay only for what you use.</p>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="benefit-text">
                            <h5>Seamless Viewer Experience</h5>
                            <p>DRM works invisibly in the background. Your viewers enjoy smooth playback without friction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technical Specs Section -->
<section class="specs-section">
    <div class="container">
        <div class="section-header text-center">
            <h2>Technical Specifications</h2>
            <p>Built on industry standards for maximum compatibility</p>
        </div>

        <div class="row specs-grid">
            <div class="col-lg-6">
                <div class="spec-card">
                    <h4>Supported DRM Systems</h4>
                    <ul class="spec-list">
                        <li><strong>Google Widevine</strong> - Android, Chrome, Firefox, Edge</li>
                        <li><strong>Apple FairPlay</strong> - Safari, iOS, tvOS, macOS</li>
                        <li><strong>Microsoft PlayReady</strong> - Edge, Windows, Xbox</li>
                        <li><strong>AES-128 HLS</strong> - Universal fallback encryption</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="spec-card">
                    <h4>Supported Formats</h4>
                    <ul class="spec-list">
                        <li><strong>HLS</strong> - HTTP Live Streaming with encryption</li>
                        <li><strong>DASH</strong> - Dynamic Adaptive Streaming with CENC</li>
                        <li><strong>MP4</strong> - Protected fragmented MP4</li>
                        <li><strong>Audio</strong> - Protected AAC, MP3 streaming</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="spec-card">
                    <h4>Security Features</h4>
                    <ul class="spec-list">
                        <li>AES-128 and AES-256 encryption</li>
                        <li>Secure key exchange protocols</li>
                        <li>Hardware-level security on supported devices</li>
                        <li>Anti-tampering and integrity checks</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="spec-card">
                    <h4>Integration Options</h4>
                    <ul class="spec-list">
                        <li>RESTful API with comprehensive documentation</li>
                        <li>JavaScript, PHP, Python, Ruby, Node.js SDKs</li>
                        <li>WordPress, Shopify, and LMS plugins</li>
                        <li>Webhooks for event-driven workflows</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content text-center">
            <h2>Ready to Protect Your Content?</h2>
            <p>Start securing your premium media with Publitio DRM today. Free trial includes full DRM capabilities.</p>
            <div class="cta-buttons">
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Start Free Trial</a>
                <a href="{{ route('docs.drm') }}" class="btn btn-outline-light btn-lg">Read Documentation</a>
            </div>
        </div>
    </div>
</section>

<!-- Related Resources Section -->
<section class="resources-section bg-light">
    <div class="container">
        <div class="section-header text-center">
            <h2>Related Resources</h2>
        </div>

        <div class="row resources-grid">
            <div class="col-lg-4 col-md-6">
                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h5>DRM Documentation</h5>
                    <p>Complete guide to implementing DRM protection with Publitio API.</p>
                    <a href="{{ route('docs.drm') }}" class="resource-link">Read Docs →</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h5>DRM Launch Announcement</h5>
                    <p>Learn about our DRM release and all the new features included.</p>
                    <a href="{{ url('/community/blog/big-update-drm-file-account-transfers--plugin-improvements') }}" class="resource-link">Read Blog Post →</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h5>Digital Asset Management</h5>
                    <p>Explore our complete DAM solution for organizing your media library.</p>
                    <a href="{{ route('solutions.dam') }}" class="resource-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
.drm-hero {
    background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
    color: #ffffff;
    padding: 100px 0;
}

.hero-title {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.hero-subtitle {
    font-size: 1.5rem;
    color: #00d4ff;
    margin-bottom: 1.5rem;
}

.hero-description {
    font-size: 1.1rem;
    color: #b8b8b8;
    margin-bottom: 2rem;
    line-height: 1.8;
}

.hero-cta .btn {
    margin-right: 1rem;
    margin-bottom: 1rem;
}

.section-header {
    margin-bottom: 3rem;
}

.section-header h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.section-header p {
    font-size: 1.2rem;
    color: #666;
}

.features-section {
    padding: 80px 0;
}

.feature-card {
    background: #fff;
    border-radius: 12px;
    padding: 2rem;
    margin-bottom: 2rem;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
}

.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.12);
}

.feature-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #00d4ff 0%, #0099cc 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.feature-icon i {
    font-size: 1.5rem;
    color: #fff;
}

.feature-card h3 {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.feature-card p {
    color: #666;
    line-height: 1.7;
}

.how-it-works-section {
    padding: 80px 0;
}

.step-card {
    text-align: center;
    padding: 2rem;
}

.step-number {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #00d4ff 0%, #0099cc 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 700;
    color: #fff;
    margin: 0 auto 1.5rem;
}

.step-card h4 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.step-card p {
    color: #666;
}

.use-cases-section {
    padding: 80px 0;
}

.use-case-card {
    background: #fff;
    border-radius: 12px;
    padding: 2rem;
    margin-bottom: 2rem;
    border: 1px solid #eee;
    transition: border-color 0.3s ease;
}

.use-case-card:hover {
    border-color: #00d4ff;
}

.use-case-icon {
    width: 50px;
    height: 50px;
    background: #f0f9ff;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
}

.use-case-icon i {
    font-size: 1.3rem;
    color: #0099cc;
}

.use-case-card h4 {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 0.75rem;
}

.use-case-card p {
    color: #666;
    font-size: 0.95rem;
    margin-bottom: 0;
}

.benefits-section {
    padding: 80px 0;
}

.benefits-content h2 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 2rem;
}

.benefit-item {
    display: flex;
    margin-bottom: 1.5rem;
}

.benefit-icon {
    margin-right: 1rem;
    flex-shrink: 0;
}

.benefit-icon i {
    font-size: 1.5rem;
    color: #00d4ff;
}

.benefit-text h5 {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.benefit-text p {
    color: #666;
    margin-bottom: 0;
}

.specs-section {
    padding: 80px 0;
}

.spec-card {
    background: #fff;
    border-radius: 12px;
    padding: 2rem;
    margin-bottom: 2rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.spec-card h4 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid #00d4ff;
}

.spec-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.spec-list li {
    padding: 0.5rem 0;
    color: #555;
}

.spec-list li strong {
    color: #333;
}

.cta-section {
    background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
    color: #fff;
    padding: 80px 0;
}

.cta-content h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.cta-content p {
    font-size: 1.2rem;
    color: #b8b8b8;
    margin-bottom: 2rem;
}

.cta-buttons .btn {
    margin: 0 0.5rem 1rem;
}

.resources-section {
    padding: 80px 0;
}

.resource-card {
    background: #fff;
    border-radius: 12px;
    padding: 2rem;
    margin-bottom: 2rem;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.resource-icon {
    width: 60px;
    height: 60px;
    background: #f0f9ff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
}

.resource-icon i {
    font-size: 1.5rem;
    color: #0099cc;
}

.resource-card h5 {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 0.75rem;
}

.resource-card p {
    color: #666;
    margin-bottom: 1rem;
}

.resource-link {
    color: #0099cc;
    font-weight: 600;
    text-decoration: none;
}

.resource-link:hover {
    color: #007399;
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2rem;
    }

    .hero-subtitle {
        font-size: 1.2rem;
    }

    .section-header h2 {
        font-size: 1.8rem;
    }
}
</style>
@endpush
