using System.Text.RegularExpressions;

namespace KosmaPanel
{
    public class RemoveTrailingDots
    {
        public void Remove(string filePath)
        {
            string yamlContent = File.ReadAllText(filePath);
            string pattern = @"(?<=\S)\s*\.\.\.\s*$";
            string replacement = string.Empty;

            string newContent = Regex.Replace(yamlContent, pattern, replacement, RegexOptions.Multiline);
            File.WriteAllText(filePath, newContent);
        }
    }
}