export const formatDuration = (minutes) => {
    const MINUTES_PER_HOUR = 60;
    const MINUTES_PER_DAY = MINUTES_PER_HOUR * 24;
    const MINUTES_PER_WEEK = MINUTES_PER_DAY * 7;
    const MINUTES_PER_MONTH = MINUTES_PER_DAY * 30;

    let duration = "";
    let num;

    if (minutes >= MINUTES_PER_MONTH) {
        num = Math.floor(minutes / MINUTES_PER_MONTH);
        duration += num + (num > 1 ? " months " : " month ");
        minutes = minutes % MINUTES_PER_MONTH;
    }

    if (minutes >= MINUTES_PER_WEEK) {
        num = Math.floor(minutes / MINUTES_PER_WEEK);
        duration += num + (num > 1 ? " weeks " : " week ");
        minutes = minutes % MINUTES_PER_WEEK;
    }

    if (minutes >= MINUTES_PER_DAY) {
        num = Math.floor(minutes / MINUTES_PER_DAY);
        duration += num + (num > 1 ? " days " : " day ");
        minutes = minutes % MINUTES_PER_DAY;
    }

    if (minutes >= MINUTES_PER_HOUR) {
        num = Math.floor(minutes / MINUTES_PER_HOUR);
        duration += num + (num > 1 ? " hours " : " hour ");
        minutes = minutes % MINUTES_PER_HOUR;
    }

    if (minutes > 0) {
        duration += minutes + (minutes > 1 ? " minutes " : " minute ");
    }

    return duration.trim();
}

export const formatDate = (dateString, includeMinutes = false) => {
    const options = {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };
    if (includeMinutes) {
        options.hour12 = false;
        options.hour = '2-digit';
        options.minute = '2-digit';
    }
    return new Date(dateString).toLocaleDateString('en-US', options);
}