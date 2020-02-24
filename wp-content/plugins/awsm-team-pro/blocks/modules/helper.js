class ATPHelper {
    static parseShortcode(shortcodeText) {
        let atts = {};
        shortcodeText.match(/[\w-]+=".+?"/g).forEach( (attr) => {
            attr = attr.match(/([\w-]+)="(.+?)"/);
            atts[attr[1]] = attr[2];
        });
       
        return atts;
    }
}

export default ATPHelper;