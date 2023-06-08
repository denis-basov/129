<!-- файл с формой и кодом JS -->

<form>
    <input type="text" name="name" id="123">
    <button>Submit</button>
</form>

<h1></h1>

<script>
    const form = document.querySelector('form');

    form.addEventListener('submit', evt => {
        evt.preventDefault();

        let sendData = async function() {
            let response = await fetch('form.php', {
                method: 'POST',
                body: new FormData(form)
            });
            let data = await response.json();
            console.log(data);
            document.querySelector('h1').innerText = `Имя: ${data.name}`;

        }
        sendData();
    })
</script>