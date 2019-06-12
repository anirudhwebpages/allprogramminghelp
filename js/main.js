let showCallForm = () => {
    console.log('call');
    document.getElementById('messageContainer').style.display = 'none';
    document.getElementById('callContainer').style.display = 'block';
    document.getElementById('callOption').style.borderTop = '5px solid #C845AA';
    document.getElementById('callOption').style.borderBottom = 'none';
    document.getElementById('callOption').style.borderLeft = '5px solid #C845AA';
    document.getElementById('callOption').style.borderRight = '5px solid #C845AA';
    document.getElementById('messageOption').style.borderTop = 'none';
    document.getElementById('messageOption').style.borderBottom = '5px solid #C845AA';
    document.getElementById('messageOption').style.borderLeft = 'none';
    document.getElementById('messageOption').style.borderRight = 'none';
};

let showMessageForm = () => {
    console.log('message');
    document.getElementById('messageContainer').style.display = 'block';
    document.getElementById('callContainer').style.display = 'none';
    document.getElementById('callOption').style.borderTop = 'none';
    document.getElementById('callOption').style.borderBottom = '5px solid #C845AA';
    document.getElementById('callOption').style.borderLeft = 'none';
    document.getElementById('callOption').style.borderRight = 'none';
    document.getElementById('messageOption').style.borderTop = '5px solid #C845AA';
    document.getElementById('messageOption').style.borderBottom = 'none';
    document.getElementById('messageOption').style.borderLeft = '5px solid #C845AA';
    document.getElementById('messageOption').style.borderRight = '5px solid #C845AA';
}