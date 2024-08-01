import shell from 'shelljs';

const args = process.argv.slice(2);
const blockName = args[0] || 'example-acf-block';
const blockDir = `./src/Blocks/${blockName}`;

// shell git clone into blockDir
shell.exec(`git clone git@github.com:askonomm/wptf-acf-block.git ${blockDir}`);

// shell cd into blockDir
shell.cd(blockDir);

// shell remove .git
shell.rm('-rf', '.git');

// shell replace all occurences of example-acf-block with blockName
shell.sed('-i', /example-acf-block/g, blockName, 'block.json');
shell.sed('-i', /example-acf-block/g, blockName, 'preview.php');
shell.sed('-i', /example-acf-block/g, blockName, 'preview.twig');
shell.sed('-i', /example-acf-block/g, blockName, 'scripts.js');
shell.sed('-i', /example-acf-block/g, blockName, 'styles.css');
