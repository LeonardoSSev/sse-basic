const url = new URL("http://localhost:8000/server.php");
const eventSource = new EventSource(url);

eventSource.onmessage = function (event) {
    const newElement = document.createElement("li");
    const eventList = document.getElementById("list");

    newElement.innerHTML = "message: " + event.data;
    eventList.appendChild(newElement);
}