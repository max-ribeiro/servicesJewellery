function addClient(e){
    let confirmated = confirm('Deseja salvar o novo cliente?');
    if(confirmated){
        let name = document.getElementById('name').value;
        let surname = document.getElementById('surname').value;
        let tel = document.getElementById('telphone').value;
        let tel2 = document.getElementById('telphone2').value;
        let rgCpf = document.getElementById('rgCpf').value;
        let assoc = document.getElementById('assoc').value;
        if(name == ''|| surname == '' || rgCpf == ''){
            alert("Verifique se os campos obrigatórios foram preenchidos corretamente e tente novamente.");
        }else{
            const user = {
                name,
                surname,
                tel,
                tel2,
                rgCpf,
                assoc
            }
            $.ajax({
                method: "POST",
                url:"../src/backend/interface/addUser.php",
                data:user,
                dataType:"text"
            }).done(response=>{
                if(response){
                    alert(response);
                }else{
                    alert('Opss! Ocorreu algum erro ao processar o registro');
                }
            }).fail((xhr,desc,err)=>{
                alert('Uups! Ocorreu algum erro!');
                console.log(xhr);
                console.log("Detalhes: " + desc + "nErro:" + err);
            });
        }    
    }
}
