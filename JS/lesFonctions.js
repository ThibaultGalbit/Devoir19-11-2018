function connexion(statut)
{
    $.ajax(
    {
        type:"get",
        url:"index.php/C_region/connexion",
        data:"statut="+statut,
        success:function(data)
        {
            $('#Ville').empty();
            $('#Ville').append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
