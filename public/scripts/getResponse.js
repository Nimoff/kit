async function getResponse(data, count){
    let response = await fetch('app/models/IndexAjax.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: data,
    });

    let content = await response.json();

    let table = document.querySelector('.table');

    for(let key in content){
        let fio = content[key]['surname'] + ' ' +content[key]['name'] + ' ' + content[key]['father_name'];
        let tr = document.createElement('tr');
        count++;

        let number = document.createElement('td');
        number.classList.add('number');
        let name = document.createElement('td');
        name.classList.add('name');
        let birthday = document.createElement('td');
        birthday.classList.add('birthday');
        let age = document.createElement('td');
        age.classList.add('age');
        let dateGet = document.createElement('td');
        dateGet.classList.add('enter');
        let registration = document.createElement('td');
        registration.classList.add('registration');

        let redact = document.createElement('td');
        let link = document.createElement('a');
        link.href = 'pupil/' + content[key]['id'];
        redact.classList.add('icon');
        link.innerHTML = 'ссылка';
        redact.appendChild(link);

        number.textContent = count;
        name.textContent = fio;
        birthday.textContent = content[key]['birthday'];
        age.textContent = content[key]['age'];
        dateGet.textContent = content[key]['date_get'];
        registration.textContent = content[key]['registration'];

        tr.appendChild(number);
        tr.appendChild(name);
        tr.appendChild(birthday);
        tr.appendChild(age);
        tr.appendChild(dateGet);
        tr.appendChild(registration);
        tr.appendChild(redact);
        table.appendChild(tr);
    }
}
document.addEventListener('DOMContentLoaded', ()=>{
    let params = 0;
    let count = 0;
    getResponse(params, count);
    document.addEventListener('scroll', ()=>{
        if(document.documentElement.scrollHeight <= document.documentElement.clientHeight + window.pageYOffset){
            params += 15;
            count += 15;
            getResponse(params, count);
        }
    });
});
