function signIn(){
    let oauthEndpoint = "https://accounts.google.com/o/oauth2/auth";

    let form = document.createElement("form");
    form.setAttribute("method", "GET");
    form.setAttribute("action", oauthEndpoint);

    let params = {
        client_id: "15362515146-tefj6uc4mp1slgtfc2r5p3ldrhf14qia.apps.googleusercontent.com",
        redirect_uri: "http://127.0.0.1:5500",
        response_type: "token",
        scope: "https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
        include_granted_scopes: "true",
        state: "pass-through value",
    }

   for (let param in params){
    let input = document.createElement("input");
    input.setAttribute("type", "hidden");
    input.setAttribute("name", param);
        input.setAttribute("value", params[param]);
        form.appendChild(input);
    }

    document.body.appendChild(form);
    
    form.submit();
}