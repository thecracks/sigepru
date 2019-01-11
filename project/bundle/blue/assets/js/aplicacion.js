
//Alertas

function msg_info(titulo, mensaje) {
    $.Notification.notify('info', 'bottom right', titulo, mensaje);
}

function msg_exito(titulo, mensaje) {
    $.Notification.notify('success', 'bottom right', titulo, mensaje);
}

function msg_advertencia(titulo, mensaje) {
    $.Notification.notify('warning', 'bottom right', titulo, mensaje);
}

function msg_error(titulo, mensaje) {
    $.Notification.notify('error', 'bottom right', titulo, mensaje);
}