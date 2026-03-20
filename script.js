function generate(){
    let selected = []

    document.querySelectorAll(".custom-control-input").forEach(app => {
        if(app.checked){
            selected.push(app.value)
        }
    })
    console.log(selected)
    let script = "sudo snap install"

    selected.forEach(appSelected => {
        if(appSelected == "spotify"){
            script += " spotify"
        }else if(appSelected == "vscode"){
            script += " code --classic"
        }
    })
    console.log(script)

}