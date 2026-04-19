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
            <button class="posting-tab active">Announcement</button>
            <button class="posting-tab">Events</button>
        </div>
        <button class="button-primary new-post-btn">+ New Post</button>
    </div>

    <div class="posting-content">
        <div class="posting-main-container">
            <!-- Create New Post Form -->
            <div class="create-post-form-container">
                <div class="create-post-form">
                    <div class="form-header">
                        <svg class="calendar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        <h3>Create New Post</h3>
                    </div>

                    <form class="posting-form">
                        <div class="form-group">
                            <label for="post-title">Title:</label>
                            <input type="text" id="post-title" placeholder="" class="form-input">
                        </div>

                        <div class="form-group">
                            <label for="post-category">Category:</label>
                            <select id="post-category" class="form-select">
                                <option>General Announcement</option>
                                <option>Academic</option>
                                <option>Event</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <textarea id="post-content" placeholder="Enter Post Content..." class="form-textarea"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="file-upload-area">
                                <input type="file" id="post-file" hidden>
                                <label for="post-file" class="file-upload-label">
                                    Drag & Drop Image here or <span class="browse-link">Browse Files</span>
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn-publish">Publish Announcement</button>
                    </form>
                </div>

                <!-- Recent Document Posts -->
                <div class="recent-posts-container">
                    <h3 class="recent-posts-title">Recent Document Posts</h3>

                    <div class="recent-post-item">
                        <div class="post-type-badge pdf">PDF</div>
                        <div class="post-details">
                            <h4>Parental Consent Form</h4>
                            <p>Form that parents/guardians must sign to allow their child to participate in a school activity.</p>
                            <span class="post-date">34 mins ago</span>
                        </div>
                        <div class="post-actions">
                            <button class="action-btn" title="View">👁️</button>
                            <button class="action-btn" title="Edit">✏️</button>
                            <button class="action-btn" title="Delete">🗑️</button>
                        </div>
                    </div>

                    <div class="recent-post-item">
                        <div class="post-type-badge docx">DOCX</div>
                        <div class="post-details">
                            <h4>Graduation Guidelines</h4>
                            <p>Requirements and procedures for graduating students, including eligibility criteria, other infractions, and important...</p>
                            <span class="post-date">1 day ago</span>
                        </div>
                        <div class="post-actions">
                            <button class="action-btn" title="View">👁️</button>
                            <button class="action-btn" title="Edit">✏️</button>
                            <button class="action-btn" title="Delete">🗑️</button>
                        </div>
                    </div>

                    <div class="recent-post-item">
                        <div class="post-type-badge xlsx">XLSX</div>
                        <div class="post-details">
                            <h4>Field Trip Waiver Form</h4>
                            <p>Form that students and parents must sign to acknowledge that the student will be participating in a field trip outside of...</p>
                            <span class="post-date">3 days ago</span>
                        </div>
                        <div class="post-actions">
                            <button class="action-btn" title="View">👁️</button>
                            <button class="action-btn" title="Edit">✏️</button>
                            <button class="action-btn" title="Delete">🗑️</button>
                        </div>
                    </div>

                    <div class="recent-post-item">
                        <div class="post-type-badge xlsx">XLSX</div>
                        <div class="post-details">
                            <h4>Updated School Rules & Regulations</h4>
                            <p>Latest school policies, behavioral guidelines, and disciplinary rules that students are expected to follow during the...</p>
                            <span class="post-date">3 days ago</span>
                        </div>
                        <div class="post-actions">
                            <button class="action-btn" title="View">👁️</button>
                            <button class="action-btn" title="Edit">✏️</button>
                            <button class="action-btn" title="Delete">🗑️</button>
                        </div>
                    </div>

                    <div class="recent-post-item">
                        <div class="post-type-badge xlsx">XLSX</div>
                        <div class="post-details">
                            <h4>Quarterly Exam Schedule</h4>
                            <p>Official schedule for quarterly examinations, including exam dates, subjects, and assigned time slots for each section.</p>
                            <span class="post-date">1 week ago</span>
                        </div>
                        <div class="post-actions">
                            <button class="action-btn" title="View">👁️</button>
                            <button class="action-btn" title="Edit">✏️</button>
                            <button class="action-btn" title="Delete">🗑️</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>