/**
 * The purpose of this file is to programmatically update the value of "VITE_DEV",
 * an environement variable defined inside the .env file. By default, "VITE_DEV" is set
 * to "true" and this value changes to "false" when runnning any other script than "dev".
 */

import fs from "fs";
import path from "path";
import { fileURLToPath } from "url";

const __filename = fileURLToPath(import.meta.url); // Gets the full path of the current file
const __dirname = path.dirname(__filename);        // Gets the directory path of the current file
const envFilePath = path.join(__dirname, ".env");  // Creates a valid path to the .env file by joining path segments

// Reads a file and returns its content
function readFileContent(filePath) {
  return fs.readFileSync(filePath, "utf-8");
}

/**
 * This function replaces a key-pair value using regular expression.
 * Note that "m" flag is important because it allows the script
 * to find VITE_DEV regardless of its position in the file. Without
 * this flag, the variable would need to be placed at the very beginning
 * of the .env file, which is not the case here. It's not a big deal,
 * but it adds more flexibility to the process.
 *
 * @param {string} content - The content of the file as a string.
 * @param {string} key     - The key to search for.
 * @param {string} value   - The value to replace the key with.
 */

function replaceEnvVariable(content, key, value) {
  const regex = new RegExp(`^${key}=.*`, "m");      // Using a regular expression to target the exact part of the file we need to edit
  return content.replace(regex, `${key}=${value}`); // Replace the targeted part by our new content
}

// Updates the .env file with a new key-value pair
function updateEnvFile(filePath, key, value) {
  const content = readFileContent(filePath);                      // Read the current file content
  const updatedContent = replaceEnvVariable(content, key, value); // Replace the key-value pair
  fs.writeFileSync(filePath, updatedContent, "utf-8");            // Write the updated content back to the file
}

// Determine the value for VITE_DEV
const viteDevValue = process.env.npm_lifecycle_event === "predev" ? "true" : "false";

// Update the .env file with the appropriate value for VITE_DEV
updateEnvFile(envFilePath, "VITE_DEV", viteDevValue);
