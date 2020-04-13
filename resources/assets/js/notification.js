
/**
 * Notifications: List and Count selector, and seconds for the timeout to refresh the list.
 * Refresh the ui every minute, while the ajax call for new content is done once every 2 minutes
 * for all open tabs.
 */
var notificationList, notificationCount, notificationRefreshTimeout = 60 * 1000;

$(document).ready(function () {
    notificationList = $('#header-notification-list');
    notificationCount = $('#header-notification-count');
    if (notificationList.length === 1) {
        // Every thirty seconds, we check if the storage was changed.
        updateNotificationUI();
    }
});

function updateNotificationUI() {
    //console.log('updateNotificationUI', new Date());

    // Only do an ajax call if we haven't done one in a while by looking at the local storage
    let last = localStorage.getItem('last_notification');
    let now = new Date().getTime();
    let delay = now - (60 * 2000);

    if (!last || last < delay) {
        localStorage.setItem('last_notification', now);
        refreshNotifications();
    } else {
        // If we have up to date info, show it
        let count = localStorage.getItem('notification-count');
        let body = localStorage.getItem('notification-body');

        if (count > 0) {
            notificationList.html(body);
            notificationCount.html(count).show();
        } else {
            notificationCount.hide();
        }
        setTimeout(updateNotificationUI, notificationRefreshTimeout);
    }
}

/**
 * Get new data for notifications
 */
function refreshNotifications() {
    //console.log('refreshNotifications', new Date());
    $.ajax(notificationList.data('url'))
        .done(function(result) {
            localStorage.setItem('notification-body', result.body);
            localStorage.setItem('notification-count', result.count);
            updateNotificationUI();
        }
    );
}

