<section class="calendar-screen">
    <div class="calendar-column calendar-months">
        <div class="calendar-panel month-panel">
            <div class="year-nav">
                <button class="year-control">&lt;</button>
                <div>
                    <div class="year-label">2026</div>
                    <div class="month-label">April</div>
                </div>
                <button class="year-control">&gt;</button>
            </div>
            <nav class="month-list">
                <?php foreach (['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month): ?>
                    <button class="month-item<?php echo $month === 'April' ? ' active' : ''; ?>"><?php echo $month; ?></button>
                <?php endforeach; ?>
            </nav>
            <div class="calendar-menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="calendar-column calendar-grid">
        <div class="calendar-panel main-calendar">
            <div class="calendar-header">
                <div class="calendar-date">
                    <span class="calendar-day-number">4</span>
                    <div>
                        <div class="calendar-month">April 2026</div>
                        <div class="calendar-weekday">Friday</div>
                    </div>
                </div>
            </div>
            <div class="calendar-table">
                <div class="weekday-row">
                    <span>Sun</span><span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span>
                </div>
                <div class="date-grid">
                    <?php
                    $dates = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30];
                    ?>
                    <?php foreach ($dates as $date): ?>
                        <span class="date-cell<?php echo in_array($date, [3, 22]) ? ' highlighted' : ''; ?>"><?php echo $date; ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="calendar-column calendar-events">
        <div class="calendar-panel event-panel">
            <div class="event-summary">
                <span class="event-month">April 2026</span>
                <h2>Friday</h2>
                <p>Good Friday</p>
            </div>
            <div class="event-list-panel">
                <div class="event-list-item">
                    <span class="event-dot"></span>
                    <div>
                        <strong>FIRST FRIDAY MASS</strong>
                    </div>
                </div>
                <div class="event-list-item">
                    <span class="event-dot"></span>
                    <div>
                        <strong>BIRTHDAY NI KY</strong>
                    </div>
                </div>
            </div>
            <button class="button-primary add-event" type="button">+ Add Event</button>
        </div>
    </div>
</section>