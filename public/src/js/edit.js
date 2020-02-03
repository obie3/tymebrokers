var editing = false;

if (document.getElementById && document.createElement) {
    var butt = document.createElement('BUTTON');
    var buttext = document.createTextNode('Ready!');
    butt.appendChild(buttext);
    butt.onclick = saveEdit;
}

function catchId(e) {
    if (editing) return;

    if (!document.getElementById || !document.createElement) return;
    if (!e) var obj = window.event.srcElement;
    else var obj = e.target;
    while (obj.nodeType != 1) {
        obj = obj.parentNode;
    }
    if (obj.tagName == 'P' || obj.tagName == '')
}