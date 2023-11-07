// Realizar una solicitud GET a la API
fetch('/api/data')
    .then(response => response.text())
    .then(data => {
        // Parsear los datos XML
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(data, 'application/xml');
        const items = xmlDoc.querySelectorAll('item');

        // Obtener el elemento de la lista donde se mostrarán los comentarios
        const commentList = document.getElementById('comment-list');

        // Iterar a través de los elementos y mostrarlos en la lista
        items.forEach(item => {
            const id = item.querySelector('id').textContent;
            const user = item.querySelector('user').textContent;
            const comment = item.querySelector('comment').textContent;

            const listItem = document.createElement('li');
            listItem.innerHTML = `<strong>ID:</strong> ${id}, <strong>User:</strong> ${user}, <strong>Comment:</strong> ${comment}`;
            commentList.appendChild(listItem);
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });
