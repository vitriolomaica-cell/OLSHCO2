<section class="posting-screen">
    <div class="posting-topbar">
        <div class="posting-search">
            <input type="search" placeholder="Search" aria-label="Search announcements and events">
        </div>
        <div class="posting-user-info">
            <div class="user-avatar"></div>
            <span>User</span>
        </div>
    </div>

    <div class="posting-tabs-row">
        <div class="posting-tabs">
            <button class="posting-tab">Announcement</button>
            <button class="posting-tab active">Events</button>
        </div>
        <?php if ($role != 'Student'): ?>
            <button class="button-primary new-post-btn">New Post</button>
        <?php endif; ?>
    </div>

    <div class="posting-content">
        <div class="posting-filters">
            <span class="filter-label">Departmental</span>
        </div>

        <div class="view-section announcement-view">
            <div class="announcement-page">
                <div class="announcement-heading">
                    <h1>ANNOUNCEMENTS</h1>
                </div>
                <div class="announcement-grid announcement-highlight-grid">
                    <article class="announcement-card">
                        <div class="announcement-image">
                            <img src="assets/images/ELEM.jpg" alt="Preschool & Grade School" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;">
                        </div>
                        <div class="announcement-copy">
                            <h3>Preschool & Grade School</h3>
                            <p class="announcement-subtitle">Nursery to Grade 6</p>
                        </div>
                    </article>
                    <article class="announcement-card">
                        <div class="announcement-image">
                            <img src="assets/images/JUNIORHIGH_2.jpg" alt="Junior High School" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;">
                        </div>
                        <div class="announcement-copy">
                            <h3>Junior High School</h3>
                            <p class="announcement-subtitle">Grade 7 to Grade 10</p>
                        </div>
                    </article>
                    <article class="announcement-card">
                        <div class="announcement-image">
                            <img src="assets/images/seniorhigh.jpg" alt="Senior High School" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;">
                        </div>
                        <div class="announcement-copy">
                            <h3>Senior High School</h3>
                            <p class="announcement-subtitle">Grade 11 to Grade 12<br>[STEM, ABM, HUMSS, TVL-ICT]</p>
                        </div>
                    </article>
                    <article class="announcement-card">
                        <div class="announcement-image">
                            <img src="assets/images/college.jpg" alt="College" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;">
                        </div>
                        <div class="announcement-copy">
                            <h3>College</h3>
                            <p class="announcement-subtitle">BEED, BSED, BTLED, BECE, BSCRIM, BSOAD, BSHM, BSIT</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="view-section event-view active">
            <div class="announcement-grid event-grid">
                <article class="announcement-card">
                    <div class="announcement-image">
                        <img src="assets/images/ELEM.jpg" alt="Elementary Announcements" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;">
                    </div>
                    <div style="background: rgba(76, 7, 7, 0.95); padding: 12px 16px; border-radius: 12px; margin: 12px; text-align: center;">
                        <h3 style="color: #fff; font-size: 1.1rem; margin: 0;">Elementary Announcements</h3>
                    </div>
                    <button class="see-details-btn">See Details</button>
                </article>
                <article class="announcement-card">
                    <div class="announcement-image">
                        <img src="assets/images/JUNIORHIGH_2.jpg" alt="Junior High Announcements" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;">
                    </div>
                    <div style="background: rgba(76, 7, 7, 0.95); padding: 12px 16px; border-radius: 12px; margin: 12px; text-align: center;">
                        <h3 style="color: #fff; font-size: 1.1rem; margin: 0;">Junior High Announcements</h3>
                    </div>
                    <button class="see-details-btn">See Details</button>
                </article>
                <article class="announcement-card">
                    <div class="announcement-image">
                        <img src="assets/images/SENIORHIGH.jpg" alt="Senior High Announcements" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;">
                    </div>
                    <div style="background: rgba(76, 7, 7, 0.95); padding: 12px 16px; border-radius: 12px; margin: 12px; text-align: center;">
                        <h3 style="color: #fff; font-size: 1.1rem; margin: 0;">Senior High Announcements</h3>
                    </div>
                    <button class="see-details-btn">See Details</button>
                </article>
                <article class="announcement-card">
                    <div class="announcement-image">
                        <img src="assets/images/college.jpg" alt="College Announcements" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;">
                    </div>
                    <div style="background: rgba(76, 7, 7, 0.95); padding: 12px 16px; border-radius: 12px; margin: 12px; text-align: center;">
                        <h3 style="color: #fff; font-size: 1.1rem; margin: 0;">College Announcements</h3>
                    </div>
                    <button class="see-details-btn">See Details</button>
                </article>
            </div>

            <div class="announcement-section-divider">
                <span class="filter-label">Event Highlights</span>
            </div>

            <div class="announcement-posts-grid">
                <article class="announcement-post">
                    <h4>First Friday Mass</h4>
                    <p class="post-meta">April 3, 2026 - 7:30 am</p>
                    <div class="post-image">
                        <img src="assets/images/ffmass.jpg" alt="First Friday Mass" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;">
                    </div>
                    <button class="see-details-btn">See Details</button>
                </article>
                <article class="announcement-post">
                    <h4>Student Achievement Day</h4>
                    <p class="post-meta">March 26, 2026</p>
                    <div class="post-image">
                        <img src="assets/images/crim.jpg" alt="Student Achievement Day" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;">
                    </div>
                    <button class="see-details-btn">See Details</button>
                </article>
            </div>
        </div>
    </div>
</section>