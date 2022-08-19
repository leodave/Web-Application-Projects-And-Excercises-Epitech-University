// import React from "react";
// import {
//   StyleSheet,
//   Text,
//   View,
//   SafeAreaView,
//   Image,
//   TouchableOpacity,
//   Button,
//   Alert,
//   Platform,
//   StatusBar,
// } from "react-native";
// // ALNqDKXbHmAPrSklSlN4tg
// // ig0gFbh_xAJd7hY2NtQMpjUUkMgZbQ
// //client-id  a9a255327f57be5
// // secret-   0f004505c4b419d28e8f9f6f42281396179279f9
// export default class Profile extends React.Component {
//   render() {
//     return (
//       <SafeAreaView style={styles.container}>
//         <Text onPress={() => console.log("clicked")} style={styles.myText}>
//           Hello World
//         </Text>
//         <Button
//           title='click here'
//           onPress={() =>
//             Alert.alert("title", "message", [
//               { text: "yes", onPress: () => console.log("yes") },
//               { text: "no", onPress: () => console.log("no") },
//             ])
//           }
//         />
//         <Button
//           title='Home'
//           onPress={() => this.props.navigation.navigate("Home")}
//         />
//         <StatusBar style='auto' />
//       </SafeAreaView>
//     );
//   }
// }
// const styles = StyleSheet.create({
//   container: {
//     flex: 1,
//     backgroundColor: "dodgerblue",
//     fontSize: "40px",
//     paddingTop: Platform.OS === "android" ? StatusBar.currentHeight : 0,
//   },
//   myText: {
//     fontSize: 40,
//     fontWeight: "bold",
//   },
// });
import { Button, View, Text } from "react-native";

function Profile({ navigation }) {
  return (
    <View style={{ flex: 1, alignItems: "center", justifyContent: "center" }}>
      <Text>Details Screen</Text>
      <Button
        title='Go to Details... again'
        onPress={() => navigation.navigate("Profile")}
      />
      <Button title='Go to Home' onPress={() => navigation.navigate("Home")} />
      <Button title='Go back' onPress={() => navigation.goBack()} />
      <Button
        title='Go back to first screen in stack'
        onPress={() => navigation.popToTop()}
      />
    </View>
  );
}
