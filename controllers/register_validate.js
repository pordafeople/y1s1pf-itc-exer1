function validateWith(requirements) {
    let err = '';
    for (const [field, sub_requirements] of Object.entries(requirements)) {
        let sub_err = '';
        const value = document.getElementById(field).value;
        for (const { regex, error } of sub_requirements) {
            const isValid = regex.test(value);
            if (!isValid) {
                sub_err += `- ${error}\n`;
            }
        }
        if (sub_err !== '') {
            err += `Invalid ${field}:\n${sub_err}\n`;
        }
    }
    return err;
}

function validate() {
    const err = validateWith({
        custname: [{
            regex: /[A-Z][a-z]*, ([A-Z][a-z]* )+[A-Z]\./,
            error: "Must follow the format Lastname, Firstname M.",
        }],
        // address
        // number
        email: [{
            regex: /[\w\.]+@\w+(?:\.\w+)+/,
            error: "Must be a valid email like name@example.com",
        }],
        password: [
            {
                regex: /\W/,
                error: "Must contain at least one special character",
            }, {
                regex: /\d/,
                error: "Must contain at least one digit",
            }, {
                regex: /[a-z]/,
                error: "Must contain at least one lowercase letter",
            }, {
                regex: /[A-Z]/,
                error: "Must contain at least one CAPITAL LETTER",
            }, {
                regex: /.{8,}/,
                error: "Must be at least 8 characters",
            }
        ],
        // confirmpassword
    });
    const success = err === '';
    if (success) {
        alert('Registered.');
    } else {
        alert('Failed to register:\n\n' + err);
    }
    return success;
}
