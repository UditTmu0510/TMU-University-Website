@extends('layouts.university.colleges.medical_with_sidebar')
@section('content')

<link rel="stylesheet" href="{{asset('assets/css/aebas_calendar.css')}}">


<div class="main-content">

    <h1 class="tmu-text-primary tmu-page-heading pt-md-4"><span>AEBAS Attendance </span><span> Dashboard
        </span></h1>
    <div class="container py-2">
        <!-- Date Filter -->
        <div class="mb-4">
            <label for="dateFilter" class="form-label ps-1" style="font-weight:bold;">Enter Date (MM-DD-YYYY):</label>
            <input type="date" id="dateFilter" class="form-control" onchange="filterByDate()">
        </div>

        <!-- Calendar Header -->
        <div class="justify-content-center align-items-center">
            <h3 id="calendar-title" class="text-center mb-2"></h3>
        </div>
        <div class="d-flex justify-content-center align-items-center mb-3 p-0">
            <button id="prev-month" class="button button-small text-pre">&lt; </button>
            <button id="next-month" class="button button-small text-end"> &gt;</button>
        </div>

        <!-- Calendar Grid -->
        <div id="calendar" class="calendar"></div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    const calendar = $('#calendar');
    const calendarTitle = $('#calendar-title');
    const today = new Date();
    let currentYear = today.getFullYear();
    let currentMonth = today.getMonth();

    function formatDate(year, month, day) {
        return `${year}-${String(month).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
    }

    function loadCalendar(year, month) {
        const startDate = new Date(year, month, 1);
        const endDate = new Date(year, month + 1, 0);
        calendarTitle.text(startDate.toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long'
        }));

        calendar.empty();

        // Add weekday headers
        const weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        weekdays.forEach(day => {
            calendar.append(`<div class="calendar-header">${day}</div>`);
        });

        // Generate blank days for days before the start of the month
        for (let i = 0; i < startDate.getDay(); i++) {
            calendar.append('<div class="calendar-day inactive"></div>');
        }

        // Generate days
        for (let day = 1; day <= endDate.getDate(); day++) {
            const date = formatDate(year, month + 1, day);
            calendar.append(`<div class="calendar-day inactive" data-date="${date}">${day}</div>`);
        }

        // Fetch active dates
        $.get(`/api/attendance?year=${year}&month=${month + 1}`, function(activeDates) {
            activeDates.forEach(record => {
                const {
                    id,
                    date
                } = record; // Destructure id and date
                const dayElement = $(`.calendar-day[data-date="${date}"]`);
                dayElement.removeClass('inactive').addClass('active');
                dayElement.on('click', function() {
                    const confirmed = confirm('Do you want to download the PDF for this date?');
                    if (confirmed) {
                        window.location.href = `/attendance/download/${id}`; // Use id here
                    }
                });
            });
        });
    }

    function filterByDate() {
        const selectedDate = $('#dateFilter').val();
        if (selectedDate) {
            const date = new Date(selectedDate); // Default format will be 'YYYY-MM-DD'
            if (isNaN(date.getTime())) {
                alert("Invalid date. Please enter a valid date in DD-MM-YYYY format.");
                return;
            }

            currentYear = date.getFullYear();
            currentMonth = date.getMonth();
            loadCalendar(currentYear, currentMonth);
        }
    }

    $('#prev-month').on('click', function() {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        loadCalendar(currentYear, currentMonth);
    });

    $('#next-month').on('click', function() {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        loadCalendar(currentYear, currentMonth);
    });

    loadCalendar(currentYear, currentMonth);
</script>

@endsection