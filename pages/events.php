<?php if ($role === 'Admin' || $role === 'Faculty'): ?>
<section class="page-section">
    <div class="card">
        <h2>Latest Events</h2>
        <p class="subtitle">Events section to create or review upcoming school activities.</p>
        <div class="event-list">
            <div class="event-pill"><strong>Moving Up and Graduation Ceremonies 2026</strong><span>March 27, 2026</span></div>
            <div class="event-pill"><strong>Students' Achievement Day</strong><span>March 26, 2026</span></div>
            <div class="event-pill"><strong>Commencement Exercises 2026</strong><span>March 28, 2026</span></div>
        </div>
    </div>
    <div class="grid-2">
        <div class="card">
            <h3>Event Post Form</h3>
            <div class="form-grid">
                <div style="grid-column: 1 / -1;"><label class="label">Event Title</label><input type="text" placeholder="Enter Event title..."></div>
                <div><label class="label">Start Month</label><select>
                        <option>April</option>
                        <option>May</option>
                    </select></div>
                <div><label class="label">Year</label><select>
                        <option>2026</option>
                        <option>2027</option>
                    </select></div>
                <div style="grid-column: 1 / -1;"><label class="label">Content</label><textarea placeholder="Enter Post Content..."></textarea></div>
                <div style="grid-column: 1 / -1;"><button class="button-primary" type="button">Publish Event</button></div>
            </div>
        </div>
        <div class="card">
            <h3>Event Overview</h3>
            <p>All events stay connected to the calendar and announcement flow so that students and faculty can always access the latest schedule updates.</p>
            <p class="subtitle"><!-- TODO: Add icon or image for the events overview here --> </p>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ($role === 'Student'): ?>
<section class="page-section">
    <div class="card">
        <h2>Upcoming Events</h2>
        <p class="subtitle">Stay updated with school activities.</p>

        <div class="event-list">
            <div class="event-pill"><strong>Moving Up and Graduation Ceremonies 2026</strong><span>March 27, 2026</span></div>
            <div class="event-pill"><strong>Students' Achievement Day</strong><span>March 26, 2026</span></div>
            <div class="event-pill"><strong>Commencement Exercises 2026</strong><span>March 28, 2026</span></div>
        </div>
    </div>
</section>
<?php endif; ?>